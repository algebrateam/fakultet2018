<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


/**
 * @abstract Ovim testom ćemo pokušati pokriti cijelu konfiguraciju postavki za naš projekt Fakultet
 * 
 * @author pmrvic
 * @copyright (c) 2018, Predrag Mrvic
 * @example C:\xampp\php\php.exe C:\Users\pmrvic\Code\fakultet\vendor\phpunit\phpunit.phar --configuration "C:\Users\pmrvic\Code\faks2017\phpunit.xml"
 */
class ConfigFakultetTest extends TestCase{
  //Laravel's versioning scheme maintains the following convention: paradigm.major.minor
    public function testNajmanjaVerzijaLaravela($najmanjaverzija="5.5.0"){
        $temp0=explode(".",$najmanjaverzija);  // 6.3.33  6.3.33  6.3.33
        $temp1=explode(".",app()::VERSION);    // 5.5.33  6.2.0  7.2.0
        //$najmanjaverzija=str_replace(".","",$najmanjaverzija);
        //$ver=str_replace(".","",app()::VERSION);

        $this->assertGreaterThanOrEqual((int)$temp0[0], (int)$temp1[0],"glavna verzija je manja od trazene!");
        if ($temp1[0]==$temp1[0]){
          $this->assertGreaterThanOrEqual((int)$temp0[1], (int)$temp1[1],"sekundarna verzija je niza od trazene");
        }
         if ($temp1[0]>=$temp1[0]){
          $this->assertGreaterThanOrEqual((int)$temp0[1], (int)$temp1[1]);
        }      
        
    }
    public function testAppKeyPostavljen()
    {
      //Dohvaćanje konfiguracijske varijable:
      //Config::get('app.key')    // static metoda
      //config('app.key')         // preporucena metoda putem config()
      //$_ENV['APP_KEY']          // direktno putem globalne varijable
      
      
 //       $this->assertNotEmpty($_ENV['APP_KEY']
 //               ,'Kljuc nije generiran. Pokreni "php artisan key:generate"');
        $this->assertNotEmpty(config('app.key'),'Kljuc nije generiran. Pokreni "php artisan key:generate"');
        
        $this->assertEquals ("base64"
                ,substr($_ENV['APP_KEY'], 0, 6)
                ,'Kljuc nije ispravan, mora pocinjati sa "base64"');
       
        $this->assertEquals (51,strlen($_ENV['APP_KEY'])
                ,'Kljuc nije dovoljne duljine, mora imati 51 znak');
                
    }
    
      /**
       * @abstract Provjerava jesmo li dodali vlastite direktorije u autoload listu
       * @author pmrvic
       */
    public function testComposerJsonAutoload() {
       $this->markTestSkipped('Ovo je zastarjelo u verziji Laravel > 5.5');
        // Učitaj cijeli file u string
        //$string = file_get_contents("/home/pmrvic/Code/<project-name>/composer.json");
        $string = file_get_contents(dirname(__DIR__)
          .DIRECTORY_SEPARATOR
          //.".."
          .DIRECTORY_SEPARATOR
          ."composer.json");
        
        // Pretvori ucitani JSON u PHP Array
        $json_a = json_decode($string, true);
     
        // Pripremi Array za usporedbu
        $autoloadArray =["database/seeds","database/factories","tests/TestCase.php"];
  
        // Usporedi dva arraya
        $this->assertArraySubset($autoloadArray, $json_a['autoload']);
    }

    /**
     * 
     */
    public function testPostavkeServiceProvider()
    {
       // void markTestSkipped(string $message)
        $this->markTestSkipped('Ovo je zastarjelo u verziji Laravel > 5.5');
         $this->assertTrue(in_array('Collective\Html\HtmlServiceProvider'
                 , config('app.providers'))
                 ,'"Collective\Html\HtmlServiceProvider" postavi u "/config/app.php"');
    
      // TODO napravi testove za:
      //    Way\Generators\GeneratorsServiceProvider::class,
      //  Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class,
         
    }  
        
        
    public function testPostavkeCustomAliases()
    {
       $this->markTestSkipped('Ovo je zastarjelo u verziji Laravel > 5.5');
         $this->assertTrue(in_array('Collective\Html\FormFacade'
                 , config('app.aliases'))
                 ,'"Alias Collective\Html\FormFacade" postavi u "/config/app.php"');
         
         $this->assertTrue(in_array('Collective\Html\HtmlFacade'
                 , config('app.aliases'))
                 ,'"alias Collective\Html\HtmlFacade" postavi u "/config/app.php"');  
         
         $this->assertTrue(in_array('Illuminate\Support\Facades\Input'
                 , config('app.aliases'))
                 ,'"alias Illuminate\Support\Facades\Input" postavi u "/config/app.php"');  
                  
         $this->assertTrue(in_array('Illuminate\Support\Facades\App'
                 , config('app.aliases'))
                 ,'"alias Illuminate\Support\Facades\App" postavi u "/config/app.php"');  
    } 
       
    
     /**
     * @abstract Testiranje svih aliasa u "/config/app.php"
     * @param string $alias 
     *
     * @dataProvider sviAliasi
     */
    public function testSviAliasi($alias){
         $this->assertTrue(in_array($alias
                 , config('app.aliases'))
                 ,'"alias '.$alias.'" postavi u "/config/app.php"');  
    }
        public function sviAliasi()
    {
        return [
            ['Illuminate\Support\Facades\App'],
            ['Illuminate\Support\Facades\Artisan'],
            ['Illuminate\Support\Facades\Auth'],
            ['Illuminate\Support\Facades\Blade'],
            ['Illuminate\Support\Facades\Bus'],
            ['Illuminate\Support\Facades\Cache'],
            ['Illuminate\Support\Facades\Config'],
            ['Illuminate\Support\Facades\Cookie'],
            ['Illuminate\Support\Facades\Crypt'],
            ['Illuminate\Support\Facades\DB'],
            ['Illuminate\Database\Eloquent\Model'],
            ['Illuminate\Support\Facades\Event'],
            ['Illuminate\Support\Facades\File'],
            ['Illuminate\Support\Facades\Gate'],
            ['Illuminate\Support\Facades\Hash'],
            ['Illuminate\Support\Facades\Lang'],
            ['Illuminate\Support\Facades\Log'],
            ['Illuminate\Support\Facades\Mail'],
            ['Illuminate\Support\Facades\Notification'],
            ['Illuminate\Support\Facades\Password'],
            ['Illuminate\Support\Facades\Queue'],
            ['Illuminate\Support\Facades\Redirect'],
            ['Illuminate\Support\Facades\Redis'],
            ['Illuminate\Support\Facades\Request'],
            ['Illuminate\Support\Facades\Response'],
            ['Illuminate\Support\Facades\Route'],
            ['Illuminate\Support\Facades\Schema'],
            ['Illuminate\Support\Facades\Session'],
            ['Illuminate\Support\Facades\Storage'],
            ['Illuminate\Support\Facades\URL'],
            ['Illuminate\Support\Facades\Validator'],
            ['Illuminate\Support\Facades\View'],
            
        ];
    }

}

