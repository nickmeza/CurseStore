<?php 
class Route {
    public static $validRoutes = array();

    
    public function isRouteValid() {
        global $Routes;
        $uri = $_SERVER['REQUEST_URI'];
    
        if (!in_array(explode('?',$uri)[0], $Routes)) {
          return 0;
        } else {
          return 1;
        }
    }
    
      // Insert the route into the $Routes array.
    private static function registerRoute($route) {
    
        global $Routes;
        $Routes[] = $GLOBALS['BASE_URL'].$route;
    
    }
    
      // This method creates dynamic routes.
    public static function dyn($dyn_routes) {
        // Split the route on '/', i.e user/<1>
        $route_components = explode('/', $dyn_routes);
        // Split the URI on '/', i.e user/francis
        $uri_components = explode('/', substr($_SERVER['REQUEST_URI'], strlen($GLOBALS['BASE_URL'])-1));
    
        // Loop through $route_components, this allows infinite dynamic parameters in the future.
        for ($i = 0; $i < count($route_components); $i++) {
          // Ensure we don't go out of range by enclosing in an if statement.
          if ($i+1 <= count($uri_components)-1) {
            // Replace every occurrence of <n> with a parameter.
            $route_components[$i] = str_replace("<$i>", $uri_components[$i+1], $route_components[$i]);
          }
        }
        // Join the array back into a string.
        
        $route = implode($route_components, '/');
        // Return the route.
        return $route;
    }
    
      // Register the route and run the closure using __invoke().
    public static function set($route, $closure) {
          if ($_SERVER['REQUEST_URI'] == $GLOBALS['BASE_URL'].$route) {
            self::registerRoute($route);
            $closure->__invoke();
          } else if (explode('?', $_SERVER['REQUEST_URI'])[0] == $GLOBALS['BASE_URL'].$route) {
            self::registerRoute($route);
            $closure->__invoke();
          } else if ($_GET['url'] == explode('/', $route)[0]) {
            self::registerRoute(self::dyn($route));
            $closure->__invoke();
          }
    }
    public static function get($route, $function){
        

        self::$validRoutes[]=$route;
        // var_dump(self::$validRoutes);
        
        if(substr($route,0,1)!="/"){
            $route="/".$route;
        }
        $uriSplit=explode(":",$route);
        var_dump( $uriSplit);
        echo "<br/>";
        echo "<br/>";
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);
        var_dump( $parsed_url);
        echo $route;
        echo "<br/>"; 
        echo $parsed_url['path'];
        echo "<br/>"; 
        // echo $_SERVER['REQUEST_URI'];
        // echo "<br/>";
        $encontrado = 0;
        if($parsed_url['path']==$route){

            $encontrado= 1;
            
            //Parse Uri
            
            // $uriSplit=explode("jo",$parsed_url['path']);
            
            $function->__invoke();
        }
        $encontrado +=1;
        
        

        
    }
}

?>
