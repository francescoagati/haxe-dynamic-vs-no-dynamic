class Main
{
  #if dynamic
    static dynamic  public function pippo(){
  #else
    static  public function pippo(){
  #end
    trace("pippa");
  }

  public static function main()
  {
    pippo();
  }
}
