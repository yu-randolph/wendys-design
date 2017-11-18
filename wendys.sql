-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 18, 2017 at 06:54 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fl_wendys`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Signature Iced Tea', 'iced-tea.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(2, 'Bundle Meal', 'bundle-meal.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(3, 'Baconator', 'smokehouse-barbeque-nator.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(4, 'Beef Burgers', 'deluxe-sandwiches.jpg', '2017-11-17 02:33:20', '2017-11-17 06:23:54'),
(5, 'Hearty Sandwiches', 'hearty-sandwich.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(6, 'Meaty Chicken', 'meaty-chicken.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(7, 'Real Meal Deals', 'rmd-category.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(8, 'Green Salads', 'green-salads.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(9, 'Frosty', 'dairy-frosty.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(10, 'Signature Sides', 'fries.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(11, 'Breakfast*', 'wendys-breakfast.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(12, 'Beverages', 'beverages.jpg', '2017-11-17 02:33:20', '2017-11-17 02:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Iced Tea', 'Freshly brewed tea made better with the sweet and sour taste of lemon.', 'iced-tea-classic.jpg', 1, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(2, 'Fresh Iced Tea Lite', 'Freshly brewed tea made better with the sweet and sour taste of lemon.', 'iced-tea-classic.jpg', 1, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(3, 'Baconator Single Bundle', ' ', 'baconator-single-bundle.jpg', 2, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(4, 'Bacon Mushroom Melt Bundle', 'Your forever favorite Bacon Mushroom Melt made for your friends and family. Now with Butterscotch Bar!', 'bacon-mushroom-melt-bundle.jpg', 2, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(5, 'Fried Chicken Bundle', 'Crispy and meaty chicken meal your family will enjoy. Now with Butterscotch bar!', 'fck-bundle.jpg', 2, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(6, 'Baconator Mushroom Melt', 'A classic Wendy’s twist to the Baconator. Loaded with two quarter-pound beef patties, two slices of American cheese and six strips of smoked bacon in a toasted premium Kaiser bun drizzled with our signature cheese with mushroom sauce.', 'baconator-mushroom-melt.jpg', 5, '2017-11-17 02:33:20', '2017-11-17 06:23:54'),
(7, 'Baconator Single', 'It’s everything a Baconator should be: crispy bacon, melted premium cheese, buttery soft bun and a juicy single patty made of choice-cut beef, prepared right when you order.  Its new single size is specially created for the lightweight Baconator lover.', 'baconator-single.jpg', 3, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(8, 'Baconator', 'Two quarter-pound beef patties, two slices of American cheese and six strips of smoked bacon all served fresh in a toasted premium Kaiser bun. It’s the burger for big appetites!', 'baconator.jpg', 3, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(9, 'Single with Cheese', ' ', 'single-with-cheese.jpg', 4, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(10, 'Bacon Mushroom Melt', 'Indulge in this fresh off the grill beef patty, american cheese, crispy bacon, smothered in mushroom cheddar sauce, sandwiched in toasted buttered buns. Grab one now and savor the Wendy’s Bacon Mushroom Melt, your forever favorite.', 'bacon-mushroom-melt.jpg', 4, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(11, 'Cheeseburger Deluxe', 'Level up with 100% pure beef patty with the complete combo of mayonnaise, ketchup, pickles, onions, tomato, lettuce and a slice of American cheese all in a toasted bun. Who knew cheeseburgers could get even better?', 'cheeseburger-deluxe.jpg', 4, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(12, 'Bacon Cheeseburger', 'Everything gets more awesome with bacon! Just like our 100% pure beef patty on a toasted bun with mayonnaise, tomato, lettuce and American cheese topped with two strips of smoked bacon.', 'bacon-cheeseburger.jpg', 4, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(13, 'Zesty Chicken Sandwiches', ' ', 'zesty-chicken.jpg', 5, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(14, 'Shrimp Sandwich', 'Each  patty is made from the freshest grade-A shrimps with the perfect mix of choice spices, fried until golden and sandwiched by creamy tartar sauce and fresh veggies slaw in a warm, toasted buttery bun.', 'shrimp-sandwich.jpg', 5, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(15, 'Fish Fillet Sandwich', 'Alaskan polluck with crispy panko breading,  new creamy tartar dressing & fresh veggie slaw.   It\'s a treat! Only from Wendy\'s!', 'fish-fillet-sandwich.jpg', 5, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(16, 'Spicy Chicken Fillet', 'Chicken breast fillet marinated and lightly breaded to perfection with spicy seasoning plus mayonnaise, tomato and lettuce on a toasted bun. Yup, this is one hot chicken burger!', 'spicy-chicken-fillet.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 06:23:54'),
(17, 'Homestyle Chicken Fillet', 'Breaded and pressure-fried chicken breast fillet served with mayonnaise, tomato and lettuce on a toasted premium Kaiser bun. You can even make it extra special with additional cheese or bacon.', 'homestyle-chicken-fillet.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 06:23:54'),
(18, 'Chicken Nuggets 6 Pieces', 'Crispy, bite-sized, all-white chicken meat. Crispy outside, juicy inside. Choose from 2 your favorite sauce honey barbecue or honey mustard. Also available with rice or French fries for Combo meal.', '6pcs-chicken-nuggets.jpg', 6, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(19, 'Two Pieces Fried Chicken with Rice', 'Two servings of our signature fried chicken, made with a special blend of seasoning, freshly breaded in the store and cooked for every order, now served with rice.', '2pcs-fried-chicken-with-rice.jpg', 6, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(20, 'One Pieces Fried Chicken with Rice', 'Our signature fried chicken, made with a special blend of seasoning, freshly breaded in the store and cooked for every order, now served with rice.', '1pc-fried-chicken-with-rice.jpg', 6, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(21, 'One Pieces Fried Chicken with Spaghetti', 'Spaghetti and one serving of our signature fried chicken, made with a special blend of seasoning, freshly breaded in the store and cooked for every order.', 'homestyle-chicken-fillet.jpg', 6, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(22, '5 For 125', 'Your Wendy\'s favorites come together in one awesome deal of a meal. Now you\'ll feel 5x more filled and 5x more satisfied with the new #Wendys5for125! Enjoy our 1-pc Salisbury Steak, Crunchy Spring Rolls, Natural-Cut Fries, Frosty, and soda all by yourself.', '5-for-125.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 06:23:54'),
(23, 'Two Piece Salisbury Steak', 'Enjoy your burger as a complete meal with two beef patties, a generous serving of savory gravy with mushrooms and rice. Great for lunch or dinner!', 'rmd-salisbury-steak.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(24, 'Spaghetti', 'Twirl your fork into this tomato delight! Noodles cooked al-dente served with a rich tomato-based sauce made with 100% pure ground beef, spices, and sausages topped with shredded cheese.', 'spaghetti.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(25, 'One Piece Salisbury Steak', 'Enjoy your burger as a complete meal with one beef patty, a generous serving of savory gravy with mushrooms and rice. Great for lunch or dinner!', 'rmd-salisbury-steak.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(26, 'Crunchy Spring Roll', 'This Asian-inspired roll has a crunchy shell with ground pork, fresh vegetables and spices inside! Served with sweet chili sauce.', 'rmd-crunchy-spring-roll.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(27, 'Sesame Garlic Chicken', 'Crunchy chicken bites with savory Sesame Garlic Sauce, paired with freshly cooked rice.', 'rmd-sesame-garlic-chicken.jpg', 7, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(28, 'BBQ Burger', ' ', 'bbq-burger.jpg', 3, '2017-11-17 02:33:20', '2017-11-17 06:23:54'),
(29, 'Macaroni Side Salad', 'Freshly prepared from mixed macaroni, pineapple tidbits, green and red jello, raisins, cucumber, and shredded cheese. It’s the perfect complement to any Wendy’s meal.', 'macaroni-side-salad.jpg', 8, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(30, 'Garden Side Salad', 'A healthy side order of fresh tomatoes, shredded cheese, shredded carrots, sliced cucumber, onions and croutons prepared with our unique salad blend.', 'garden-side-salad.jpg', 8, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(31, 'Chicken Caesar Side Salad', 'Freshly prepared with crisp Romaine lettuce, crunchy bacon bits, croutons, taste chicken bites and shredded cheese drizzled with Caesar\'s dressing.', 'chicken-caesar-salad.jpg', 8, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(32, 'Chunky Chicken Salad', 'Get your fill with a hefty portion of fresh romaine lettuce, delicious chicken fillet slices, hard boiled eggs and tomato wedges, topped with bits of bacon and a sweet and tangy honey mustard dressing. Who says a salad isn’t filling?', 'chunky-chicken-salad.jpg', 8, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(33, 'Frosty Vanilla', 'If it\'s better than ice cream then you know it\'s really good! This rich and thick creamy dessert is the perfect end to any meal.', 'frosty-vanilla.jpg', 9, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(34, 'Frosty Chocolate', 'If it’s better than ice cream then you know it’s really good! This rich and thick chocolate-like shake is the perfect end to any meal.', 'frosty-chocolate.jpg', 9, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(35, 'Mango Graham Burst', 'Sweet mango swirl and real fruit bits, topped with crushed grahams and mango poppers', 'frosty-mango-graham-burst.jpg', 9, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(36, 'Twisted Frosty Classic with Oreo Cookies', ' ', 'twisted-frosty-oreo.jpg', 9, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(37, 'Twisted Frosty Salted Caramel Crunch', ' ', 'twisted-frosty-salted-caramel.jpg', 9, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(38, 'Salisbury Baked Potato', ' ', 'salisbury-baked-potato.jpg', 10, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(39, 'Natural Cut Fries with Sea Salt', 'Made from real fresh potatoes deep-fried to perfection, each served with just the right amount of sea salt for that extra special flavor!', 'french-fries.jpg', 10, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(40, 'Baked Potato Cheese & Cheese', 'Dig into this famous and delicious Wendy’s classic! The bursting flavor of hot baked potato topped with cheese and cheese.', 'baked-potato.jpg', 10, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(41, 'Soft Drink', 'Enjoy your Wendy’s favorites with your choice of Coca-Cola, Sprite, Royal, Sarsi or Minute Maid Fresh.', 'softdrink.jpg', 12, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(42, 'Coffee', 'Sip on the bold flavor of 100% pure coffee brew.', 'coffee.jpg', 12, '2017-11-17 02:33:20', '2017-11-17 02:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `label`, `price`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 'Regular', 49.00, 1, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(2, 'Large', 55.00, 1, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(3, 'Biggie', 69.00, 1, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(4, 'Regular', 49.00, 2, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(5, 'Large', 55.00, 2, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(6, 'Biggie', 69.00, 2, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(7, 'For 3', 499.00, 3, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(8, 'For 4', 659.00, 3, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(9, 'For 3', 399.00, 4, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(10, 'For 4', 499.00, 4, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(11, 'For 3', 459.00, 5, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(12, 'For 4', 599.00, 5, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(13, 'Ala-carte', 246.00, 6, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(14, 'Combo', 298.00, 6, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(15, 'Ala-carte', 145.00, 7, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(16, 'Combo', 175.00, 7, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(17, 'Ala-carte', 246.00, 8, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(18, 'Combo', 298.00, 8, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(19, 'Ala-carte', 136.00, 9, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(20, 'Combo', 189.00, 9, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(21, 'Ala-carte', 91.00, 10, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(22, 'Combo', 142.00, 10, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(23, 'Ala-carte', 74.00, 11, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(24, 'Combo', 136.00, 11, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(25, 'Ala-carte', 91.00, 12, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(26, 'Combo', 142.00, 12, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(27, 'Ala-carte', 49.00, 13, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(28, 'Combo', 78.00, 13, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(29, 'Ala-carte', 98.00, 14, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(30, 'Combo', 149.00, 14, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(31, 'Ala-carte', 98.00, 15, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(32, 'Combo', 130.00, 15, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(33, 'Ala-carte', 98.00, 16, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(34, 'Combo', 142.00, 16, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(35, 'Ala-carte', 109.00, 17, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(36, 'Combo', 155.00, 17, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(37, 'Ala-carte', 99.00, 18, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(38, 'Combo', 129.00, 18, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(39, 'Ala-carte', 141.00, 19, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(40, 'Combo', 160.00, 19, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(41, 'Ala-carte', 86.00, 20, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(42, 'Combo', 99.00, 20, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(43, 'Combo', 139.00, 21, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(44, 'Combo', 125.00, 22, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(45, 'Ala-carte', 77.00, 23, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(46, 'Combo', 87.00, 23, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(47, 'Ala-carte', 49.00, 24, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(48, 'Combo', 64.00, 24, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(49, 'Ala-carte', 55.00, 25, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(50, 'Ala-carte', 141.00, 26, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(51, 'Ala-carte', 55.00, 27, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(52, 'Ala-carte', 49.00, 28, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(53, 'Combo', 107.00, 28, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(54, 'Solo', 49.00, 29, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(55, 'Big', 142.00, 29, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(56, 'Solo', 45.00, 30, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(57, 'Big', 132.00, 30, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(58, 'Solo', 55.00, 31, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(59, 'Big', 149.00, 31, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(60, 'Solo', 55.00, 32, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(61, 'Big', 149.00, 32, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(62, 'Regular', 38.00, 33, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(63, 'Medium', 60.00, 33, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(64, 'Large', 74.00, 33, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(65, 'Regular', 38.00, 34, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(66, 'Medium', 60.00, 34, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(67, 'Large', 74.00, 34, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(68, 'Regular', 45.00, 35, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(69, 'Medium', 55.00, 36, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(70, 'Large', 79.00, 36, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(71, 'Medium', 55.00, 37, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(72, 'Large', 79.00, 37, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(73, 'Solo', 49.00, 38, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(74, 'Regular', 32.00, 39, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(75, 'Large', 62.00, 39, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(76, 'Biggie', 76.00, 39, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(77, 'Solo', 49.00, 40, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(78, 'Regular', 47.00, 41, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(79, 'Large', 52.00, 41, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(80, 'Biggie', 67.00, 41, '2017-11-17 02:33:20', '2017-11-17 02:33:20'),
(81, 'Regular', 30.00, 42, '2017-11-17 02:33:20', '2017-11-17 02:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2017_11_02_084903_create_categories_table', 1),
(19, '2017_11_03_034015_create_items_table', 1),
(20, '2017_11_03_120502_create_meals_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
