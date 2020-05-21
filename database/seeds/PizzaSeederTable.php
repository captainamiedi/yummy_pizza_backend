<?php

use Illuminate\Database\Seeder;

class PizzaSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = [
            [
                'id' => 1,
                'title' => 'Neapolitan Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/v1589924055/naples_-_neapolitan_pizza_t6nsn5.jpg',
                'price' => 430,
                'description' => 'Neapolitan is the original pizza. This delicious pie dates all the way back to 18th century in Naples, Italy. During this time, the poorer citizens of this seaside city frequently purchased food that was cheap and could be eaten quickly.',
                'variations' => 'Pizza Marinara, Pizza Margherita, Pizza Margherita extra',
                'trad_toppings' => 'The typical Neapolitan pizza toppings are fresh mozzarella, tomatoes, basil leaves, oregano, and olive oil.'
            ],
            [
                'id' => 2,
                'title' => 'Chicago Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/v1589923616/california-style-pizza_tcw1jw.jpg',
                'price' => 470,
                'description' => 'Chicago pizza, also commonly referred to as deep-dish pizza, gets its name from the city it was invented in. During the early 1900’s, Italian immigrants in the windy city were searching for something similar to the Neapolitan pizza that they knew and loved. Instead of imitating the notoriously thin pie, Ike Sewell had something else in mind. He created a pizza with a thick crust that had raised edges, similar to a pie, and ingredients in reverse, with slices of mozzarella lining the dough followed by meat, vegetables, and then topped with a can of crushed tomatoes. This original creation led Sewell to create the now famous chain restaurant, Pizzeria Uno.',
                'variations' => '',
                'trad_toppings' => 'Chicago pizza are ground beef, sausage, pepperoni, onion, mushrooms, and green peppers, placed underneath the tomato sauce'
            ],
            [
                'id' => 3,
                'title' => 'New York-Style Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/c_fill,h_1365,w_2048/v1589923116/New%20York-Style%20Pizza.jpg',
                'price' => 500,
                'description' => 'With its characteristic large, foldable slices and crispy outer crust, New York-style pizza is one of America’s most famous regional pizza types. Originally a variation of Neapolitan-style pizza, the New York slice has taken on a fame all its own, with some saying its unique flavor has to do with the minerals present in New York’s tap water supply.',
                'variations' => '',
                'trad_toppings' => 'New York-style pizza usually features tomato sauce and mozzarella cheese'
            ],
            [
                'id' => 4,
                'title' => 'Sicilian Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/v1589923464/Sicilian_ouyu3a.jpg',
                'price' => 600,
                'description' => 'Sicilian pizza, also known as "sfincione," provides a thick cut of pizza with pillowy dough, a crunchy crust, and robust tomato sauce. This square-cut pizza is served with or without cheese, and often with the cheese underneath the sauce to prevent the pie from becoming soggy. ',
                'variations' => '',
                'trad_toppings' => 'Sicilian pizzas are often topped with bits of tomato, onion, anchovies, and herbs.'
            ],
            [
                'id' => 5,
                'title' => 'Greek Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/v1589923535/greek-pizza_ilwvir.jpg',
                'price' => 400,
                'description' => 'Greek pizza was created by Greek immigrants who came to America and were introduced to Italian pizza. Greek-style pizza, especially popular in the New England states, features a thick and chewy crust cooked in shallow, oiled pans, resulting in a nearly deep-fried bottom. While this style has a crust that is puffier and chewier than thin crust pizzas, it’s not quite as thick as a deep-dish or Sicilian crust.',
                'variations' => '',
                'trad_toppings' => 'It is often only topped with cheese, which is usually a mix of mozzarella and cheddar or provolone. It may feature a variety of non-Greek or Greek toppings, such as feta cheese, black olives, and red onion.'
            ],
            [
                'id' => 6,
                'title' => 'California Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/v1589923616/california-style-pizza_tcw1jw.jpg',
                'price' => 530,
                'description' => 'This pizza got its start back in the late 1970’s when Chef Ed LaDou began experimenting with pizza recipes in the classic Italian restaurant, Prego. He created a pizza with mustard, ricotta, pate, and red pepper, and by chance, served it to Wolfgang Puck. Impressed with LaDou’s innovative pie, Puck invited him to be a head pizza chef at his restaurant',
                'variations' => '',
                'trad_toppings' => ''
            ],
            [
                'id' => 7,
                'title' => 'Detroit Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/v1589923830/Detroit%20Pizza.jpg',
                'price' => 600,
                'description' => ' Detroit pizza is first topped with pepperoni, followed by brick cheese which is spread to the very edges of the pan, yielding a caramelized cheese perimeter. Sauce is then spooned over the pizza, an order similar to Chicago-style pizza. This pizza features a thick, extra crispy crust that is tender and airy on the inside.',
                'variations' => '',
                'trad_toppings' => 'Detroit pizza traditionally features pepperoni, brick cheese (usually Wisconsin brick cheese), and tomato sauce. Other typical toppings include mushrooms and olives'
            ],
            [
                'id' => 8,
                'title' => 'St. Louis Pizza',
                'image' => 'https://res.cloudinary.com/captainamiedi/image/upload/v1589924024/StLouisPizza_Header_lg_qdi16u.jpg',
                'price' => 480,
                'description' => 'This pizza features Provel processed cheese, which is a gooey combination of cheddar, Swiss, and provolone cheeses. St. Louis received an influx of Italian immigrants in the 19th century who were looking for employment opportunities. The Italian community, largely from Milan and Sicily, created the St. Louis-style pizza. Its sweet sauce is reminiscent of the Sicilian influence.',
                'variations' => '',
                'trad_toppings'=> 'St. Louis pizza features Provel cheese and a sweeter tomato sauce with a hefty dosage of oregano. Because of its firm crust, St. Louis-style pizza can support several toppings of your choice.'
            ],
        ];

        \Illuminate\Support\Facades\DB::table('pizzas')->insert($pizza);
    }
}
