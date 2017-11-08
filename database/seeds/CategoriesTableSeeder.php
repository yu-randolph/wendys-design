<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Item;
use App\Meal;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Start of Iced Tea
        $category = new Category;
        $category->name = "SIGNATURE ICED TEA";
        $category->image = "iced-tea.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Fresh Iced Tea";
        $item->description = "Freshly brewed tea made better with the sweet and sour taste of lemon.";
        $item->image = "iced-tea-classic.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 49.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Biggie";
        $meal->price = 69.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Fresh Iced Tea Lite";
        $item->description = "Freshly brewed tea made better with the sweet and sour taste of lemon.";
        $item->image = "iced-tea-classic.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 49.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Biggie";
        $meal->price = 69.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Iced Tea

        //Start Bundle
        $category = new Category;
        $category->name = "BUNDLE MEAL";
        $category->image = "bundle-meal.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Baconator Single Bundle";
        $item->description = " ";
        $item->image = "baconator-single-bundle.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "For 3";
        $meal->price = 499.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "For 4";
        $meal->price = 659.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Bacon Mushroom Melt Bundle";
        $item->description = "Your forever favorite Bacon Mushroom Melt made for your friends and family. Now with Butterscotch Bar!";
        $item->image = "bacon-mushroom-melt-bundle.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "For 3";
        $meal->price = 399.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "For 4";
        $meal->price = 499.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Fried Chicken Bundle";
        $item->description = "Crispy and meaty chicken meal your family will enjoy. Now with Butterscotch bar!";
        $item->image = "fck-bundle.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "For 3";
        $meal->price = 459.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "For 4";
        $meal->price = 599.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Bundle

        //Start Baconator
        $category = new Category;
        $category->name = "BACONATOR";
        $category->image = "smokehouse-barbeque-nator.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Baconator Mushroom Melt";
        $item->description = "A classic Wendy’s twist to the Baconator. Loaded with two quarter-pound beef patties, two slices of American cheese and six strips of smoked bacon in a toasted premium Kaiser bun drizzled with our signature cheese with mushroom sauce.";
        $item->image = "baconator-mushroom-melt.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 246.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 298.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Baconator Single";
        $item->description = "It’s everything a Baconator should be: crispy bacon, melted premium cheese, buttery soft bun and a juicy single patty made of choice-cut beef, prepared right when you order.  Its new single size is specially created for the lightweight Baconator lover.";
        $item->image = "baconator-single.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 145.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 175.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Baconator";
        $item->description = "Two quarter-pound beef patties, two slices of American cheese and six strips of smoked bacon all served fresh in a toasted premium Kaiser bun. It’s the burger for big appetites!";
        $item->image = "baconator.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 246.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 298.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Baconator

        //START HOT N' JUICY
        $category = new Category;
        $category->name = "HOT N' JUICY CHEESEBURGER";
        $category->image = "deluxe-sandwiches.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Single with Cheese";
        $item->description = " ";
        $item->image = "single-with-cheese.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 136.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 189.00;
        $meal->item_id = $item->id;
        $meal->save();


        $item = new Item;
        $item->name = "Bacon Mushroom Melt";
        $item->description = "Indulge in this fresh off the grill beef patty, american cheese, crispy bacon, smothered in mushroom cheddar sauce, sandwiched in toasted buttered buns. Grab one now and savor the Wendy’s Bacon Mushroom Melt, your forever favorite.";
        $item->image = "bacon-mushroom-melt.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 91.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 142.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Cheeseburger Deluxe";
        $item->description = "Level up with 100% pure beef patty with the complete combo of mayonnaise, ketchup, pickles, onions, tomato, lettuce and a slice of American cheese all in a toasted bun. Who knew cheeseburgers could get even better?";
        $item->image = "cheeseburger-deluxe.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 74.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 136.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Bacon Cheeseburger";
        $item->description = "Everything gets more awesome with bacon! Just like our 100% pure beef patty on a toasted bun with mayonnaise, tomato, lettuce and American cheese topped with two strips of smoked bacon.";
        $item->image = "bacon-cheeseburger.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 91.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 142.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Hot N' Juicy

        //Start Hearty
        $category = new Category;
        $category->name = "HEARTY SANDWICHES";
        $category->image = "hearty-sandwich.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Zesty Chicken Sandwiches";
        $item->description = " ";
        $item->image = "zesty-chicken.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 49.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 78.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Shrimp Sandwich";
        $item->description = "Each  patty is made from the freshest grade-A shrimps with the perfect mix of choice spices, fried until golden and sandwiched by creamy tartar sauce and fresh veggies slaw in a warm, toasted buttery bun.";
        $item->image = "shrimp-sandwich.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 98.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 149.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Fish Fillet Sandwich";
        $item->description = "Alaskan polluck with crispy panko breading,  new creamy tartar dressing & fresh veggie slaw.   It's a treat! Only from Wendy's!";
        $item->image = "fish-fillet-sandwich.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 98.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 130.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Spicy Chicken Fillet";
        $item->description = "Chicken breast fillet marinated and lightly breaded to perfection with spicy seasoning plus mayonnaise, tomato and lettuce on a toasted bun. Yup, this is one hot chicken burger!";
        $item->image = "spicy-chicken-fillet.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 98.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 142.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Homestyle Chicken Fillet";
        $item->description = "Breaded and pressure-fried chicken breast fillet served with mayonnaise, tomato and lettuce on a toasted premium Kaiser bun. You can even make it extra special with additional cheese or bacon.";
        $item->image = "homestyle-chicken-fillet.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 109.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 155.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Hearty

        //Start Meaty Chicken
        $category = new Category;
        $category->name = "MEATY CHICKEN";
        $category->image = "meaty-chicken.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Chicken Nuggets 6 Pieces";
        $item->description = "Crispy, bite-sized, all-white chicken meat. Crispy outside, juicy inside. Choose from 2 your favorite sauce honey barbecue or honey mustard. Also available with rice or French fries for Combo meal.";
        $item->image = "6pcs-chicken-nuggets.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 99.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 129.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Two Pieces Fried Chicken with Rice";
        $item->description = "Two servings of our signature fried chicken, made with a special blend of seasoning, freshly breaded in the store and cooked for every order, now served with rice.";
        $item->image = "2pcs-fried-chicken-with-rice.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 141.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 160.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "One Pieces Fried Chicken with Rice";
        $item->description = "Our signature fried chicken, made with a special blend of seasoning, freshly breaded in the store and cooked for every order, now served with rice.";
        $item->image = "1pc-fried-chicken-with-rice.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 86.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 99.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "One Pieces Fried Chicken with Spaghetti";
        $item->description = "Spaghetti and one serving of our signature fried chicken, made with a special blend of seasoning, freshly breaded in the store and cooked for every order.";
        $item->image = "homestyle-chicken-fillet.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 139.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "5 For 125";
        $item->description = "Your Wendy's favorites come together in one awesome deal of a meal. Now you'll feel 5x more filled and 5x more satisfied with the new #Wendys5for125! Enjoy our 1-pc Salisbury Steak, Crunchy Spring Rolls, Natural-Cut Fries, Frosty, and soda all by yourself.";
        $item->image = "5-for-125.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 125.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Meaty Chicken

        //Start Real Meal Deals
        $category = new Category;
        $category->name = "REAL MEAL DEALS";
        $category->image = "rmd-category.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Two Piece Salisbury Steak";
        $item->description = "Enjoy your burger as a complete meal with two beef patties, a generous serving of savory gravy with mushrooms and rice. Great for lunch or dinner!";
        $item->image = "rmd-salisbury-steak.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 77.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 87.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Spaghetti";
        $item->description = "Twirl your fork into this tomato delight! Noodles cooked al-dente served with a rich tomato-based sauce made with 100% pure ground beef, spices, and sausages topped with shredded cheese.";
        $item->image = "spaghetti.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 49.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Combo";
        $meal->price = 64.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "One Piece Salisbury Steak";
        $item->description = "Enjoy your burger as a complete meal with one beef patty, a generous serving of savory gravy with mushrooms and rice. Great for lunch or dinner!";
        $item->image = "rmd-salisbury-steak.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Crunchy Spring Roll";
        $item->description = "This Asian-inspired roll has a crunchy shell with ground pork, fresh vegetables and spices inside! Served with sweet chili sauce.";
        $item->image = "rmd-crunchy-spring-roll.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 141.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Sesame Garlic Chicken";
        $item->description = "Crunchy chicken bites with savory Sesame Garlic Sauce, paired with freshly cooked rice.";
        $item->image = "2pcs-fried-chicken-with-rice.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Ala-carte";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Real Meal Deals

        //Start Salads
        $category = new Category;
        $category->name = "GREEN SALADS";
        $category->image = "green-salads.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Macaroni Side Salad";
        $item->description = "Freshly prepared from mixed macaroni, pineapple tidbits, green and red jello, raisins, cucumber, and shredded cheese. It’s the perfect complement to any Wendy’s meal.";
        $item->image = "macaroni-side-salad.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Solo";
        $meal->price = 49.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Big";
        $meal->price = 142.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Garden Side Salad";
        $item->description = "A healthy side order of fresh tomatoes, shredded cheese, shredded carrots, sliced cucumber, onions and croutons prepared with our unique salad blend.";
        $item->image = "garden-side-salad.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Solo";
        $meal->price = 45.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Big";
        $meal->price = 132.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Chicken Caesar Side Salad";
        $item->description = "Freshly prepared with crisp Romaine lettuce, crunchy bacon bits, croutons, taste chicken bites and shredded cheese drizzled with Caesar's dressing.";
        $item->image = "chicken-caesar-salad.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Solo";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Big";
        $meal->price = 149.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Chunky Chicken Salad";
        $item->description = "Get your fill with a hefty portion of fresh romaine lettuce, delicious chicken fillet slices, hard boiled eggs and tomato wedges, topped with bits of bacon and a sweet and tangy honey mustard dressing. Who says a salad isn’t filling?";
        $item->image = "chunky-chicken-salad.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Solo";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Big";
        $meal->price = 149.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Salads

        //Start Frosty
        $category = new Category;
        $category->name = "FROSTY";
        $category->image = "dairy-frosty.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Frosty Vanilla";
        $item->description = "If it's better than ice cream then you know it's really good! This rich and thick creamy dessert is the perfect end to any meal.";
        $item->image = "frosty-vanilla.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 38.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Medium";
        $meal->price = 60.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 74.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Frosty Chocolate";
        $item->description = "If it’s better than ice cream then you know it’s really good! This rich and thick chocolate-like shake is the perfect end to any meal.";
        $item->image = "frosty-chocolate.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 38.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Medium";
        $meal->price = 60.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 74.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Mango Graham Burst";
        $item->description = "Sweet mango swirl and real fruit bits, topped with crushed grahams and mango poppers";
        $item->image = "frosty-mango-graham-burst.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 45.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Twisted Frosty Classic with Oreo Cookies";
        $item->description = " ";
        $item->image = "twisted-frosty-oreo.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Medium";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 79.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Twisted Frosty Salted Caramel Crunch";
        $item->description = " ";
        $item->image = "twisted-frosty-salted-caramel.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Medium";
        $meal->price = 55.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 79.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Frosty

        //Start Signature Sides
        $category = new Category;
        $category->name = "SIGNATURE SIDES";
        $category->image = "fries.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Salisbury Baked Potato";
        $item->description = " ";
        $item->image = "salisbury-baked-potato.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Solo";
        $meal->price = 49.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Natural Cut Fries with Sea Salt";
        $item->description = "Made from real fresh potatoes deep-fried to perfection, each served with just the right amount of sea salt for that extra special flavor!";
        $item->image = "french-fries.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 32.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 62.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Biggie";
        $meal->price = 76.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Baked Potato Cheese & Cheese";
        $item->description = "Dig into this famous and delicious Wendy’s classic! The bursting flavor of hot baked potato topped with cheese and cheese.";
        $item->image = "iced-tea-classic.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Solo";
        $meal->price = 49.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Signature Sides

        //Breakfast not included
        $category = new Category;
        $category->name = "BREAKFAST*";
        $category->image = "wendys-breakfast.jpg";
        $category->save();

        //Start Beverages
        $category = new Category;
        $category->name = "BEVERAGES";
        $category->image = "beverages.jpg";
        $category->save();

        $item = new Item;
        $item->name = "Soft Drink";
        $item->description = "Enjoy your Wendy’s favorites with your choice of Coca-Cola, Sprite, Royal, Sarsi or Minute Maid Fresh.";
        $item->image = "softdrink.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 47.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Large";
        $meal->price = 52.00;
        $meal->item_id = $item->id;
        $meal->save();

        $meal = new Meal;
        $meal->label = "Biggie";
        $meal->price = 67.00;
        $meal->item_id = $item->id;
        $meal->save();

        $item = new Item;
        $item->name = "Coffee";
        $item->description = "Sip on the bold flavor of 100% pure coffee brew.";
        $item->image = "coffee.jpg";
        $item->category_id = $category->id;
        $item->save();

        $meal = new Meal;
        $meal->label = "Regular";
        $meal->price = 30.00;
        $meal->item_id = $item->id;
        $meal->save();
        //End Beverages
    }
}
