<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Country;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
       public function oneToOne()
       {

              $user_phones = User::with('phone')->get();
              $user_phone = User::where([
                     'id' => 1
              ])->first()->phone->number;

              //    return response()->json($user_phones);
              return response()->json($user_phone);
       }
       public function oneToMany()
       {

              $posts = Post::with('comments')->paginate(10);

              return response()->json($posts);
       }
       public function manyToOne()
       {

              $comments = Comment::with('post')->paginate(10);

              return response()->json($comments);
       }

       public function manyToMany()
       {

              //   $users = User::with('roles')->get();
              //   return response()->json($users);

              $roles = Role::with('users')->get();
              return response()->json($roles);
       }

       public function hasOnThrough(){
       
          $post = Country::with('post')->get();
          return response()->json($post);
       }
       public function hasManyThrough(){
       
          $post = Country::with('posts')->get();
          return response()->json($post);
       }

       public function morphOne(){
       
       //   $users = User::with('photo')->get();
       //   return response()->json($users);


         $posts = Post::with('photo')->get();
         return response()->json($posts);
       }
}
