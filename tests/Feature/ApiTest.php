<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Log;

class ApiTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_se_acha_usuario_e_barra_acesso()
    {

        $sigaaEmailUser = new Log();
        $sigaaEmailUser->student_name = 'Test';
        $sigaaEmailUser->tuition_number = '244455667';
        $sigaaEmailUser->sigaa_user = 'testUser';
        $sigaaEmailUser->tuituion_status = 94;
        $sigaaEmailUser->email = 'test@test.com.br';
        $sigaaEmailUser->save();

        $response = $this->post('/check',[
            "tuition_number"=>'244455667', 
            "user"=>"test"
        ], [
            'Content-Type'=>'text/html; charset=UTF-8'
        ]);
        $sigaaUser = Log::where('tuition_number', '244455667');
        $sigaaUser->delete();
        $response->assertStatus(302);
    }
}
