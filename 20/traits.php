<?php
trait  test{
    public function hello(){
        echo 'hello in trait test1';
    }
    protected function welcome(){
        echo 'welcome';
    }
    abstract public function body();
    public static function groupwelcome(){
        echo 'static';
    }
}
trait test2{
    public function welcomeintest2(){
        echo 'welcome from test2';
    }
    public function hello(){
        echo 'hello in trait test2';
    }
}
class parentclass{
    public function hello(){
        echo 'hello in parent';
    }
}
trait parenttrait{
    use test ,test2{
        test::hello insteadOf test2;
        test2::hello as welcometrait;
    }
}
class childclass extends parentclass{
    use parenttrait;
    // use test ,test2{
    //     test::hello insteadOf test2;
    //     test2::hello as welcometrait;
    // }
    public function welcome2(){
        return $this->welcome();
    }
    public function body(){
        echo 'hello abstract';
    }
    // public function hello(){
    //     echo 'hello in self class';
    // }
}
$child =new childclass();
$child->body();
$child->welcome2();
$child->welcomeintest2();
$child->welcometrait();
childclass::groupwelcome();