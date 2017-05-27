<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use ReflectionException;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class AcachaAdminLTELaravelTest.
 *
 * @package Tests\Feature
 */
class AcachaAdminLTELaravelTest extends TestCase
{
    use DatabaseMigrations;

    /*
    public function setUp()
    {
        parent::setUp();
        App::setLocale('en');
    }


    public static function setUpBeforeClass()
    {
        passthru('composer dumpautoload');
    }

    public function urlReturns200($url)
    {
        $this->urlReturnsCode($url, 200);
    }
    
    public function urlReturns404($url)
    {
        $this->urlReturnsCode($url, 404);
    }


    public function urlReturns302($url)
    {
        $this->urlReturnsCode($url, 302);
    }


    public function urlReturns401($url)
    {
        $this->urlReturnsCode($url, 401);
    }

    public function urlReturnsCode($url, $code)
    {
        $response = $this->get($url);

        $response->assertStatus($code);
    }

    public function testLandingPage()
    {
        $this->urlReturns200('/');
    }

    public function testHomePage()
    {
        $this->urlReturns302('/home');
    }


    public function testLoginPage()
    {
        $this->urlReturns200('/login');
    }


    public function testRegisterPage()
    {
        $this->urlReturns200('/register');
    }


    public function testPasswordResetPage()
    {
        $this->urlReturns200('/password/reset');
    }


    public function test404Page()
    {
        $this->urlReturns404('asdasdjlapmnnk');
    }


    public function testUserApi()
    {
        $this->urlReturns302('/api/user');
    }


    public function testNewUserRegistration()
    {
        $response = $this->json('POST', '/register', [
            'name' => 'Sergi Tur Badenas',
            'email' => 'sergiturbadenas@gmail.com',
            'terms' => 'true',
            'password' => 'passw0RD',
            'password_confirmation' => 'passw0RD',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
            'name' => 'Sergi Tur Badenas',
            'email' => 'sergiturbadenas@gmail.com'
        ]);
    }


    public function testNewUserRegistrationRequiredFields()
    {
        $response = $this->json('POST', '/register', [
            'name' => '',
            'email' => '',
            'password' => '',
            'password_confirmation' => '',
        ]);

        $response->assertStatus(422)->assertJson([
            'name' => [ "The name field is required." ],
            'email' => [ "The email field is required." ],
            'password' => [ "The password field is required." ],
            'terms' => [ "The terms field is required." ],
        ]);
    }


    public function testLogin()
    {
        $user = factory(\App\User::class)->create(['password' => Hash::make('passw0RD')]);

        $response = $this->json('POST', '/login', [
            'email' => $user->email,
            'password' => 'passw0RD',
        ]);

        $response->assertStatus(302);
    }


    public function testLoginFailed()
    {
        $response = $this->json('POST', '/login', [
            'email' => 'sergiturbadenas@gmail.com',
            'password' => 'passw0RDinventatquenopotfuncionat',
        ]);

        $response->assertStatus(422)->assertJson([
            "email" => "These credentials do not match our records."
        ]);
    }


    public function testLoginRequiredFields()
    {
        $response = $this->json('POST', '/login', [
            'email' => '',
            'password' => '',
        ]);

        $response->assertStatus(422)->assertJson([
            'email' => [ "The email field is required." ],
            'password' => [ "The password field is required." ],
        ]);
    }


    public function testMakeViewCommand()
    {
        $view = 'ehqwiqweiohqweihoqweiohqweiojhqwejioqwejjqwe';
        $viewPath= 'views/' . $view . '.blade.php';
        try {
            unlink(resource_path($view));
        } catch (\Exception $e) {
        }
        $this->callArtisanMakeView($view);
        $resultAsText = Artisan::output();
        $expectedOutput = 'File ' . resource_path($viewPath) . ' created';
        $this->assertEquals($expectedOutput, trim($resultAsText));
        $this->assertFileExists(resource_path($viewPath));
        $this->callArtisanMakeView($view);
        $resultAsText = Artisan::output();
        $this->assertEquals('File already exists', trim($resultAsText));
        unlink(resource_path($viewPath));
    }


    protected function callArtisanMakeView($view)
    {
        Artisan::call('make:view', [
            'name' => $view,
        ]);
    }


    public function testAdminlteAdminCommand()
    {
        $seed = database_path('seeds/AdminUserSeeder.php');
        try {
            unlink($seed);
        } catch (\Exception $e) {
        }
        $this->callAdminlteAdminCommand();
        $this->assertFileExists($seed);
    }

    protected function callAdminlteAdminCommand()
    {
        try {
            Artisan::call('adminlte:admin');
        } catch (ReflectionException $re) {
            passthru('composer dumpautoload');
            sleep(2);
            $this->callAdminlteAdminCommand();
        }
    }*/
}
