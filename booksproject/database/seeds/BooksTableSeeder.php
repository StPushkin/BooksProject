<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Java: A Beginner\'s Guide',
            'description' => 'Fully  updated
            for  Java  Platform,  Standard  Edition  9 
            (Java SE 9), Java: A Beginner’s Guide, Seventh Edition, gets you started programming 
            in  Java  right  away.  Bestselling  programming  author  Herb  Schildt  begins  with  the 
            basics, such as how to create, compile, and run a Ja
            va program. He then moves on to 
            the  keywords,  syntax,  and  constructs  that  form  the  core  of  the  Java  language.  The 
            book  also  covers  some  of  Java’s  more  advanced  features,  including  multithreaded 
            programming,  generics,  lambda  expressions,  Swing,  and  JavaFX. 
            This  practical  Oracle 
            Press guide features details on Java SE 9’s innovative new module system, and, as an 
            added  bonus,  it  includes  an  introduction  to  JShell,  Java’s  new  interactive 
            programming tool.', 
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'title'=> 'C++: The Complete Reference',
            'description'=> 'Best-selling  genius  Herb  Schildt  covers  everything from  keywords,
            syntax,  and  libraries,  to  advanced  features  such  as  overloading, inheritance, 
            virtual  functions,  namespaces,  templates,  and  RTTI—plus,  a  complete 
            description of the Standard Template Library (STL).',
            'category_id'=> 1
        ]);
        DB::table('books')->insert([
            'title'=> 'C# 4.0 The Complete Reference',
            'description'=> 'Perfect for beginners and professional C# programmers 
            alike, this expert resource is written in the clear, crisp, uncompromising style that 
            has  made  Herb  the  choice  of  millions  worldwide.  Begin  mastering  C#  4.0  today  with help 
            from this authoritative volume!',
            'category_id'=> 1
        ]);
        DB::table('books')->insert([
            'title'=> 'Beginning Angular with Typescript',
            'description'=> 'Angular  is  one  of  the  leading  frameworks  to  develop 
            apps across all platforms. Reuse your code and build fast and high performing apps 
            for  any  platform  be  it  web,  mobile  web,  native  mobile  and  native  desktop.  You  use 
            small  manageable  components  to  build  a  large  powerful  app.  No  more  wasting  time 
            hunting for DOM nodes!',
            'category_id'=> 2
        ]);
        DB::table('books')->insert([
            'title'=> 'PHP and MySQL Web Development',
            'description'=> 
            'PHP  and  MySQL  Web  Development,  Fifth  Edition  The definitive guide to 
            building database-driven Web applications with PHP and MySQL PHP 
            and MySQL are popular open-source technologies that are ideal for quickly developing 
            database-driven  Web  applications.  PHP  is  a  powerful  scripting  language  designed  to 
            enable developers to create highly featured Web applications quickly, and MySQL is a 
            fast,  reliable  database  that  integrates  well  with  PHP  and  is  suited  for  dynamic 
            Internet-based  applications.  PHP  and  MySQL  Web  Development  shows  how  to  use  these 
            tools together to produce effective, interactive Web applications.',
            'category_id'=> 2
        ]);
        DB::table('books')->insert([
            'title'=> 'MySQL Tutorial',
            'description'=> 'MySQL Tutorial is a clear, concise introduction to the fundamental
            concepts and techniques of working with MySQL. It teaches the beginning 
            MySQL user how to create and administer powerful databases that can be used at home, 
            at work, and on the Web',
            'category_id'=> 3
            ]);
    }
}
