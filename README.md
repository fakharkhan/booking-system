# booking-system
Booking System aimed to use as a Practice Assignment for Laravel Training Session DEC17


#Week 2 Notes
return redirect()->route('clients'); //redirect to route name
return redirect()->to('/clients'); // redirects to url
return response()->json($client); // returns json response
return response()->download('robots.txt'); // return files to download in browser


### Collections
      $collection = collect([
            ['product' => 'Desk', 'price' => 200],
            ['product' => 'Chair', 'price' => 100],
            ['product' => 'Bookcase', 'price' => 150],
            ['product' => 'Door', 'price' => 100],
        ]);

        $filtered = $collection->where('price', 100);

        $filtered->all();

        return $filtered;
        
###Custom Helpers
https://laravel-news.com/creating-helpers


###Eloquent
1. Eloquent Class  (collection:all(), Query Builder: where(),Eloquent Class Object: first())
2. Query Builder (Active Record Implementation)
3. Database

###Builders
1. https://laravel.com/api/5.5/Illuminate/Database/Eloquent/Builder.html
2. https://laravel.com/api/5.5/Illuminate/Database/Query/Builder.html

##Validation
###Inline Validation
//        $rules = [
//            'name' => 'required',
//            'phone' => 'required',
//        ];
//
//        $request->validate($rules);


#ACL 
## Tables
1. Permissions
2. Roles
3. Permission_Role
4. Role_User

#Service Container and Depnedency Injection
    //$app = new Illuminate\Container\Container();

    //$arepo = new \App\Browns\Repositories\AirportRepository($app);

    //$aservice = new App\Browns\Services\AirportService($arepo);

    //dd($aservice->myName(),app('App\Browns\Services\AirportService')->myName());

    //dd((new \Illuminate\Container\Container())->make('App\Browns\Services\AirportService'));

    //dd(\Illuminate\Container\Container::getInstance()->make('App\Browns\Services\AirportService'));

    /*

        return Container::getInstance()->make($make, $parameters);
    */
    //dd(new \Illuminate\Container\Container()->make('App\Browns\Services\AirportService'))
    
#Providing parameter to Service Container:
  // $user = \App\Browns\Models\User::latest()->first();
  //  dd(app('App\Browns\Services\AirportService',['user'=>$user])->myName());
  
#https://medium.com/@NahidulHasan/laravel-ioc-container-why-we-need-it-and-how-it-works-a603d4cef10f    


#Blade Directives:
https://laravelcollective.com/

#Multilayer Architecture
1.Model 
   2.Repositories -Extends Base Repository ( Maintain Data layer)
   3.Services - Extends Base Services (Maintains Business Logic)
4.Controller 