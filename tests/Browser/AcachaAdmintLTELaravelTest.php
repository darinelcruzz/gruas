<?php

namespace Tests\Browser;

use Illuminate\Support\Facades\Hash;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Class AcachaAdmintLTELaravelTest.
 *
 * @package Tests\Browser
 */
class AcachaAdmintLTELaravelTest extends DuskTestCase
{
    use DatabaseMigrations;

    /*
    public function testLandingPage()
    {
        dump('testLandingPage');
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Acacha')
                ->assertSee('adminlte-laravel')
                ->assertSee('Pratt');
        });
    }


    private function logout()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->click('#user_menu')
                ->click('#logout')
                ->pause(2000);
        });
    }


    public function testLandingPageWithUserLogged()
    {
        dump('testLandingPageWithUserLogged');
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user)
                ->visit('/')
                ->assertSee('Acacha')
                ->assertSee('adminlte-laravel')
                ->assertSee('Pratt')
                ->assertSee($user->name);
        });

        $this->logout();
    }


    public function testLoginPage()
    {
        dump('testLoginPage');

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Sign in to start your session');
        });
    }


    public function testLogin()
    {
        dump('testLogin');

        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create(['password' => Hash::make('passw0RD')]);
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'passw0RD')
                ->press('Sign In')
                ->waitFor('#result')
                ->pause(5000)
                ->assertPathIs('/home')
                ->assertSee($user->name);
        });

        $this->logout();
    }


    public function testLoginRequiredFields()
    {
        dump('testLoginRequiredFields');
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', '')
                ->type('password', '')
                ->press('Sign In')
                ->pause(1000)
                ->assertSee('The email field is required')
                ->assertSee('The password field is required');
        });
    }


    public function testLoginRequiredFieldsDisappearsOnKeyDown()
    {
        dump('testLoginRequiredFieldsDissappearsOnKeyDown');
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', '')
                ->type('password', '')
                ->press('Sign In')
                ->pause(1000)
                ->type('email', 's')
                ->waitUntilMissing('#validation_error_email')
                ->assertDontSee('The email field is required')
                ->type('password', 'p')
                ->waitUntilMissing('#validation_error_password')
                ->assertDontSee('The password field is required');
        });
    }


    public function testLoginCredentialsNotMatch()
    {
        dump('testLoginCredentialsNotMatch');
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'emailquesegurquenoexisteix@sadsadsa.com')
                ->type('password', '12345678')
                ->press('Sign In')
                ->pause(1000)
                ->assertSee('These credentials do not match our records');
        });
    }


    public function testLoginCredentialsNotMatchDissappearsOnKeyDown()
    {
        dump('testLoginCredentialsNotMatchDissappearsOnKeyDown');
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'emailquesegurquenoexisteix@sadsadsa.com')
                ->type('password', '12345678')
                ->press('Sign In')
                ->pause(1000)
                ->type('password', '1')
                ->pause(1000)
                ->assertDontSee('These credentials do not match our records');
        });
    }


    public function testRegisterPage()
    {
        dump('testRegisterPage');
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertSee('Register a new membership');
        });
    }


    public function testPasswordResetPage()
    {
        dump('testPasswordResetPage');
        $this->browse(function (Browser $browser) {
            $browser->visit('/password/reset')
                ->assertSee('Reset Password');
        });
    }


    public function testHomePageForUnauthenticatedUsers()
    {
        dump('testHomePageForUnauthenticatedUsers');
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            view()->share('user', $user);
            $browser->visit('/home')
                ->pause(2000)
                ->assertPathIs('/login');
        });
    }


    public function testHomePageForAuthenticatedUsers()
    {
        dump('testHomePageForAuthenticatedUsers');

        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            view()->share('user', $user);
            $browser->loginAs($user)
                ->visit('/home')
                ->assertSee($user->name);
        });

        $this->logout();
    }


    public function testLogout()
    {
        dump('testLogout');
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            view()->share('user', $user);
            $browser->loginAs($user)
                ->visit('/home')
                ->click('#user_menu')
                ->pause(500)
                ->click('#logout')
                ->pause(500);
        });
    }


    public function test404Page()
    {
        dump('test404Page');
        $this->browse(function (Browser $browser) {
            $browser->visit('/asdasdjlapmnnkadsdsa')
                ->assertSee('404');
        });
    }


    public function testNewUserRegistration()
    {
        dump('testNewUserRegistration');
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'Sergi Tur Badenas')
                ->type('email', 'sergiturbadenas@gmail.com')
                ->click('.icheckbox_square-blue')
                ->type('password', 'passw0RD')
                ->type('password_confirmation', 'passw0RD')
                ->press('Register')
                ->waitFor('#result')
                ->pause(5000)
                ->assertPathIs('/home')
                ->assertSee('Sergi Tur Badenas');
        });

        $this->logout();
    }


    public function testNewUserRegistrationRequiredFields()
    {
        dump('testNewUserRegistrationRequiredFields');

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', '')
                ->type('email', '')
                ->type('password', '')
                ->press('Register')
                ->pause(1000)
                ->assertSee('The name field is required')
                ->assertSee('The email field is required')
                ->assertSee('The password field is required')
                ->assertSee('The terms field is required');
        });
    }


    public function testNewUserRegistrationRequiredFieldsDissappearsOnKeyDown()
    {
        dump('testNewUserRegistrationRequiredFieldsDissappearsOnKeyDown');

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', '')
                ->type('email', '')
                ->type('password', '')
                ->press('Register')
                ->pause(2000)
                ->type('name', 'S')
                ->pause(2000)
                ->assertDontSee('The name field is required')
                ->type('email', 's')
                ->pause(2000)
                ->assertDontSee('The email field is required')
                ->type('password', 'p')
                ->pause(2000)
                ->assertDontSee('The password field is required')
                ->click('.icheckbox_square-blue')
                ->pause(2000)
                ->assertDontSee('The terms field is required');
        });
    }


    public function testSendPasswordReset()
    {
        dump('testSendPasswordReset');

        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->visit('password/reset')
                ->type('email', $user->email)
                ->press('Send Password Reset Link')
                ->waitFor('#result')
                ->pause(1000)
                ->assertSee('We have e-mailed your password reset link!');
        });
    }


    public function testSendPasswordResetUserNotExists()
    {
        dump('testSendPasswordResetUserNotExists');

        $this->browse(function (Browser $browser) {
            $browser->visit('password/reset')
                ->type('email', 'notexistingemail@gmail.com')
                ->press('Send Password Reset Link')
                ->pause(1000)
                ->assertSee('We can\'t find a user with that e-mail address.');
        });
    }


    public function testSendPasswordResetRequiredFields()
    {
        dump('testSendPasswordResetRequiredFields');

        $this->browse(function (Browser $browser) {
            $browser->visit('password/reset')
                ->press('Send Password Reset Link')
                ->pause(1000)
                ->assertSee('The email field is required.');
        });
    }


    public function testSendPasswordResetRequiredFieldsDisappearsOnKeyDown()
    {
        dump('testSendPasswordResetRequiredFieldsDisappearsOnKeyDown');

        $this->browse(function (Browser $browser) {
            $browser->visit('password/reset')
                ->type('email', '')
                ->press('Send Password Reset Link')
                ->pause(1000)
                ->type('email', 's')
                ->pause(2000)
                ->assertDontSee('The email field is required.');
        });
    }*/
}
