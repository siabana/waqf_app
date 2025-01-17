<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Account\UserRequest;
use App\Interfaces\BeneficiaryRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use PDOException;
use DB;
use Exception;
use Throwable;

class RegisteredUserController extends Controller
{
    private UserRepositoryInterface $userRepository;
    private BeneficiaryRepositoryInterface $beneficiaryRepository;
    public function __construct(UserRepositoryInterface $userRepository, BeneficiaryRepositoryInterface $beneficiaryRepository)
    {
        $this->userRepository = $userRepository;
        $this->beneficiaryRepository = $beneficiaryRepository;
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(UserRequest $request)
    {
        $user = $this->userRepository->createUser($request);
        $user->assignRole('beneficiary');
        $userInfo = $this->userRepository->createUserInfo($user);
        $beneficiary = $this->beneficiaryRepository->createBeneficiary($userInfo);

        // event(new Registered($user)); event send mail
        Auth::login($user);
        return redirect('account/settings/overview');
    }


    /**
     * Handle an incoming api registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function apiStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $token = Str::random(60);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'api_token' => hash('sha256', $token),
        ]);

        return response($user);
    }


    public function adminStore(Request $request) : RedirectResponse
    {

        $customErrorMessages = [
            'first_name.required' => 'الاسم الأول للمستفيد مطلوب',
            'last_name.required' => 'الاسم الاخير للمستفيد مطلوب',
            'email.required' => 'البريد الالكتروني للمستفيد مطلوب',
            'email.email' => 'الرجاء ادخال بريد الكتروني صحيح',
            'email.unique' => 'البريد الالكتروني مسجل مسبقا',
            'password.required' => 'الرجاء اختيار رقم سري',
            'password.confirmed' => 'الرقم السري غير مطابق مع الأول',
        ];

        $validated =  $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => ['required', 'confirmed', Rules\Password::defaults()],
        ], $customErrorMessages);

        if($validated) {
            $user = $this->userRepository->createUser($request);
            $user->assignRole('beneficiary');
            $userInfo = $this->userRepository->createUserInfo($user);
            $beneficiary = $this->beneficiaryRepository->createBeneficiary($userInfo);

            return redirect()->back()->with('message', 'تم إنشاء المستفيد بنجاح');
        }

    return $validated;
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'hgsdaf sdf ',
            'last_name.required' => 'A message is required',
        ];
    }


}
