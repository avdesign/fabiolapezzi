<?php

namespace AVD\Http\Controllers;

use AVD\Events\UserNoteCreatedEvent;
use AVD\Events\UserUpdateProfileEvent;
use Illuminate\Support\Facades\Hash;

use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Interfaces\UserInterface as InterModel;
use AVD\Interfaces\StateInterface as InterStates;
use AVD\Interfaces\UserAddressInterface as InterAddress;
use AVD\Interfaces\ContactInterface as InterContact;



use AVD\Http\Controllers\Controller;
use AVD\Http\Requests\RegisterUserRequest;
use AVD\Http\Requests\AddressUpdateRequest;



class AccountController extends Controller
{

    protected $interModel;
    protected $interStates;
    protected $interAddress;
    protected $interContact;
    protected $configKeyword;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        InterModel $interModel,
        InterStates $interStates,
        InterContact $interContact,
        InterAddress $interAddress,
        ConfigKeyword $configKeyword)
    {
        $this->middleware('auth');

        $this->interModel    = $interModel;
        $this->interStates   = $interStates;
        $this->interAddress  = $interAddress;
        $this->interContact  = $interContact;
        $this->configKeyword = $configKeyword;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configKeyword  = $this->configKeyword->random();
        $user           = $this->interModel->setId(auth()->user()->id);

        return view('accounts.dashboard-1', compact('user','configKeyword'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('accounts.orders-1', compact('configKeyword'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('accounts.messages-1', compact('configKeyword'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function messagesPost()
    {
        return  $this->interContact->getEmail(auth()->user()->email);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function address()
    {
        $configKeyword  = $this->configKeyword->random();
        $user           = $this->interModel->setId(auth()->user()->id);
        $adresses       = $user->adresses->where('delivery', 1)->first();
        $profile        = $user->profile;


        return view('accounts.address-1', compact('configKeyword', 'adresses'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user           = $this->interModel->setId(auth()->user()->id);
        $configKeyword  = $this->configKeyword->random();

        return view('accounts.edit-1', compact('user','configKeyword'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function changeProfile($id)
    {
        $user = $this->interModel->setId(auth()->user()->id);
        return view("profiles.profile-{$id}", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(RegisterUserRequest $request)
    {
        $ip       = $request->ip();
        $user     = $this->interModel->setId(auth()->user()->id);
        $dataForm = $request->user;
        $previous = '';


        if ($request->password_current == '') {
            unset($dataForm['password']);
            unset($dataForm['password_confirmation']);
        } else {
            if (Hash::check($request->password_current, $user->password)) {
                $dataForm['password'] = bcrypt($dataForm['password']);
                $previous .= "Alterou a Senha, ";
            } else {
                $request->session()->flash('error', 'A senha atual não coincide com a senha digitada.');
                return redirect()->route('edit');
            }
        }

        $dataForm['email'] = strtolower($dataForm['email']);
        $update = $this->interModel->update($dataForm, auth()->user()->id);
        if ($update) {
            if ( $user->profile_id != $dataForm['profile_id'] ) {
                $profile  = $user->profile;
                $previous .=  "Perfil: {$profile->name}, ";
            }

            if ( $dataForm['profile_id'] == 2 ) {
                ( $user->first_name != $dataForm['first_name'] ? $previous .= "Nome:{$user->first_name}, " : $previous .='');
                ( $user->last_name != $dataForm['last_name'] ? $previous .= "Sobrenome:{$user->last_name}, " : $previous .='');
                ( $user->document1 != $dataForm['document1'] ? $previous .= "CPF:{$user->document1}, " : $previous .='');
                ( $user->document2 != $dataForm['document2'] ? $previous .= "RG:{$user->document2}, " : $previous .='');
            }

            if ( $dataForm['profile_id'] == 3 ) {
                ( $user->first_name != $dataForm['first_name'] ? $previous .= "Nome Fantasia:{$user->first_name}, " : $previous .='');
                ( $user->last_name != $dataForm['last_name'] ? $previous .= "Razão Social:{$user->last_name}, " : $previous .='');
                ( $user->document1 != $dataForm['document1'] ? $previous .= "CNPJ:{$user->document1}, " : $previous .='');
                ( $user->document2 != $dataForm['document2'] ? $previous .= "Inscrição Estadual:{$user->document2}, " : $previous .='');
            }
            ($user->email != $dataForm['email'] ? $previous .=  "Email:{$user->email}, " : $previous .='');
            ($user->phone != $dataForm['phone'] ? $previous .=  "Telefone:{$user->phone}, " : $previous .='');
            ($user->cell != $dataForm['cell'] ? $previous .=  "Celular:{$user->cell}, " : $previous .='');

            $location =  \Location::get($ip);
            $desc     =  "Local:{$location->cityName}, ";
            $desc    .=  "Estado:{$location->regionName}, ";
            $desc    .=  "CEP:{$location->zipCode}, ";
            $desc    .=  "IP:{$ip}, ";
            $desc    .=  "Latitude:{$location->latitude}, ";
            $desc    .=  "Longitude:{$location->longitude}";
            $note = [
                'user_id' => auth()->user()->id,
                'Admin' => 'Cliente',
                'label' => 'Alterou o Perfil',
                'description' => $previous.$desc
            ];

            event(new UserNoteCreatedEvent($note));

            event(new UserUpdateProfileEvent($dataForm));

            $request->session()->flash('success', 'Seu Perfil foi alterado com sucesso!');
        } else {
            $request->session()->flash('error', 'Desculpe, houve um problema não identificado, tente mais tarde.');
        }
        return redirect()->route('edit');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAddress()
    {
        $configKeyword = $this->configKeyword->random();
        $user          = $this->interModel->setId(auth()->user()->id);
        $states        = $this->interStates->pluck('name', 'uf');
        $adresses      = $user->adresses->where('delivery', 1)->first();

        return view('accounts.address-form-1', compact('user', 'adresses', 'states', 'configKeyword'));
    }


    /**
     * Update address.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAddress(AddressUpdateRequest $request)
    {
        $dataForm = $request->all();
        $adresses = $this->interAddress->setDelivery(auth()->user()->id);
        $ip       = $request->ip();
        $previous = '';

        $update   = $this->interAddress->update($dataForm, $adresses->id);
        if ($update) {

            ( $adresses->address != $dataForm['address'] ? $previous .= "Endereço:{$adresses->address}, " : $previous .='');
            ( $adresses->number != $dataForm['number'] ? $previous .= "Número:{$adresses->number}, " : $previous .='');
            ( $adresses->complement != $dataForm['complement'] ? $previous .= "Complemento:{$adresses->complement}, " : $previous .='');
            ( $adresses->district != $dataForm['district'] ? $previous .= "Bairro:{$adresses->district}, " : $previous .='');
            ( $adresses->city != $dataForm['city'] ? $previous .= "Cidade:{$adresses->city}, " : $previous .='');
            ( $adresses->state != $dataForm['state'] ? $previous .= "Estado:{$adresses->state}, " : $previous .='');
            ( $adresses->	zip_code != $dataForm['zip_code'] ? $previous .= "CEP:{$adresses->	zip_code}, " : $previous .='');

            $location =  \Location::get($ip);
            $desc     =  "Local:{$location->cityName}, ";
            $desc    .=  "Estado:{$location->regionName}, ";
            $desc    .=  "CEP:{$location->zipCode}, ";
            $desc    .=  "IP:{$ip}, ";
            $desc    .=  "Latitude:{$location->latitude}, ";
            $desc    .=  "Longitude:{$location->longitude}";
            $note = [
                'user_id' => auth()->user()->id,
                'Admin' => 'Cliente',
                'label' => 'Alterou o Endereço',
                'description' => $previous.$desc
            ];

            event(new UserNoteCreatedEvent($note));

            $request->session()->flash('success', 'Seu endereço de entrega foi atualizao com sucesso!');

        } else {
            $request->session()->flash('error', 'Desculpe, houve um problema não identificado, tente mais tarde.');
        }


        return redirect()->route('address.update');
    }

}
