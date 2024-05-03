<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
]    * @return void
     */
    public function run()
    {
        $category = [
            [
                "id"=> 1,
                "name"=> "Bank Fees",
            ],
            [
                "id"=> 2,
                "name"=> "Overdraft",
                "parent_id"=> 1
            ],
            [
                "id"=> 3,
                "name"=> "ATM",
                "parent_id"=> 1
            ],
            [
                "id"=> 4,
                "name"=> "Late Payment",
                "parent_id"=> 1
            ],
            [
                "id"=> 5,
                "name"=> "Fraud Dispute",
                "parent_id"=> 1
            ],
            [
                "id"=> 6,
                "name"=> "Foreign Transaction",
                "parent_id"=> 1
            ],
            [
                "id"=> 7,
                "name"=> "Wire Transfer",
                "parent_id"=> 1
            ],
            [
                "id"=> 8,
                "name"=> "Insufficient Funds",
                "parent_id"=> 1
            ],
            [
                "id"=> 9,
                "name"=> "Cash Advance",
                "parent_id"=> 1
            ],
            [
                "id"=> 10,
                "name"=> "Excess Activity",
                "parent_id"=> 1
            ],
            [
                "id"=> 12,
                "name"=> "Community",
            ],
            [
                "id"=> 13,
                "name"=> "Animal Shelter",
                "parent_id"=> 12
            ],
            [
                "id"=> 14,
                "name"=> "Assisted Living Services",
                "parent_id"=> 12
            ],
            [
                "id"=> 15,
                "name"=> "Facilities and Nursing Homes",
                "parent_id"=> 12
            ],
            [
                "id"=> 16,
                "name"=> "Caretakers",
                "parent_id"=> 12
            ],
            [
                "id"=> 17,
                "name"=> "Cemetery",
                "parent_id"=> 12
            ],
            [
                "id"=> 18,
                "name"=> "Courts",
                "parent_id"=> 12
            ],
            [
                "id"=> 19,
                "name"=> "Day Care and Preschools",
                "parent_id"=> 12
            ],
            [
                "id"=> 20,
                "name"=> "Disabled Persons Services",
                "parent_id"=> 12
            ],
            [
                "id"=> 21,
                "name"=> "Drug and Alcohol Services",
                "parent_id"=> 12
            ],
            [
                "id"=> 22,
                "name"=> "Education",
                "parent_id"=> 12
            ],
            [
                "id"=> 23,
                "name"=> "Vocational Schools",
                "parent_id"=> 12
            ],
            [
                "id"=> 24,
                "name"=> "Tutoring and Educational Services",
                "parent_id"=> 12
            ],
            [
                "id"=> 25,
                "name"=> "Primary and Secondary Schools",
                "parent_id"=> 12
            ],
            [
                "id"=> 26,
                "name"=> "Fraternities and Sororities",
                "parent_id"=> 12
            ],
            [
                "id"=> 27,
                "name"=> "Driving Schools",
                "parent_id"=> 12
            ],
            [
                "id"=> 28,
                "name"=> "Dance Schools",
                "parent_id"=> 12
            ],
            [
                "id"=> 29,
                "name"=> "Culinary Lessons and Schools",
                "parent_id"=> 12
            ],
            [
                "id"=> 30,
                "name"=> "Computer Training",
                "parent_id"=> 12
            ],
            [
                "id"=> 31,
                "name"=> "Colleges and Universities",
                "parent_id"=> 12
            ],
            [
                "id"=> 32,
                "name"=> "Art School",
                "parent_id"=> 12
            ],
            [
                "id"=> 33,
                "name"=> "Adult Education",
                "parent_id"=> 12
            ],
            [
                "id"=> 34,
                "name"=> "Government Departments and Agencies",
                "parent_id"=> 12
            ],
            [
                "id"=> 35,
                "name"=> "Government Lobbyists",
                "parent_id"=> 12
            ],
            [
                "id"=> 36,
                "name"=> "Housing Assistance and Shelters",
                "parent_id"=> 12
            ],
            [
                "id"=> 37,
                "name"=> "Law Enforcement",
                "parent_id"=> 12
            ],
            [
                "id"=> 38,
                "name"=> "Police Stations",
                "parent_id"=> 12
            ],
            [
                "id"=> 39,
                "name"=> "Fire Stations",
                "parent_id"=> 12
            ],
            [
                "id"=> 40,
                "name"=> "Correctional Institutions",
                "parent_id"=> 12
            ],
            [
                "id"=> 41,
                "name"=> "Libraries",
                "parent_id"=> 12
            ],
            [
                "id"=> 42,
                "name"=> "Military",
                "parent_id"=> 12
            ],
            [
                "id"=> 43,
                "name"=> "Organizations and Associations",
                "parent_id"=> 12
            ],
            [
                "id"=> 44,
                "name"=> "Youth Organizations",
                "parent_id"=> 12
            ],
            [
                "id"=> 45,
                "name"=> "Environmental",
                "parent_id"=> 12
            ],
            [
                "id"=> 46,
                "name"=> "Charities and Non-Profits",
                "parent_id"=> 12
            ],
            [
                "id"=> 47,
                "name"=> "Post Offices",
                "parent_id"=> 12
            ],
            [
                "id"=> 48,
                "name"=> "Public and Social Services",
                "parent_id"=> 12
            ],
            [
                "id"=> 49,
                "name"=> "Religious",
                "parent_id"=> 12
            ],
            [
                "id"=> 50,
                "name"=> "Temple",
                "parent_id"=> 12
            ],
            [
                "id"=> 51,
                "name"=> "Synagogues",
                "parent_id"=> 12
            ],
            [
                "id"=> 52,
                "name"=> "Mosques",
                "parent_id"=> 12
            ],
            [
                "id"=> 53,
                "name"=> "Churches",
                "parent_id"=> 12
            ],
            [
                "id"=> 54,
                "name"=> "Senior Citizen Services",
                "parent_id"=> 12
            ],
            [
                "id"=> 55,
                "name"=> "Retirement",
                "parent_id"=> 12
            ],
            [
                "id"=> 56,
                "name"=> "Food and Drink",
            ],
            [
                "id"=> 57,
                "name"=> "Bar",
                "parent_id"=> 56
            ],
            [
                "id"=> 58,
                "name"=> "Wine Bar",
                "parent_id"=> 56
            ],
            [
                "id"=> 59,
                "name"=> "Sports Bar",
                "parent_id"=> 56
            ],
            [
                "id"=> 60,
                "name"=> "Hotel Lounge",
                "parent_id"=> 56
            ],
            [
                "id"=> 61,
                "name"=> "Breweries",
                "parent_id"=> 56
            ],
            [
                "id"=> 62,
                "name"=> "Internet Cafes",
                "parent_id"=> 56
            ],
            [
                "id"=> 63,
                "name"=> "Nightlife",
                "parent_id"=> 56
            ],
            [
                "id"=> 64,
                "name"=> "Strip Club",
                "parent_id"=> 56
            ],
            [
                "id"=> 65,
                "name"=> "Night Clubs",
                "parent_id"=> 56
            ],
            [
                "id"=> 66,
                "name"=> "Karaoke",
                "parent_id"=> 56
            ],
            [
                "id"=> 67,
                "name"=> "Jazz and Blues Cafe",
                "parent_id"=> 56
            ],
            [
                "id"=> 68,
                "name"=> "Hookah Lounges",
                "parent_id"=> 56
            ],
            [
                "id"=> 69,
                "name"=> "Adult Entertainment",
                "parent_id"=> 56
            ],
            [
                "id"=> 70,
                "name"=> "Restaurants",
                "parent_id"=> 56
            ],
            [
                "id"=> 71,
                "name"=> "Winery",
                "parent_id"=> 56
            ],
            [
                "id"=> 72,
                "name"=> "Vegan and Vegetarian",
                "parent_id"=> 56
            ],
            [
                "id"=> 73,
                "name"=> "Turkish",
                "parent_id"=> 56
            ],
            [
                "id"=> 74,
                "name"=> "Thai",
                "parent_id"=> 56
            ],
            [
                "id"=> 75,
                "name"=> "Swiss",
                "parent_id"=> 56
            ],
            [
                "id"=> 76,
                "name"=> "Sushi",
                "parent_id"=> 56
            ],
            [
                "id"=> 77,
                "name"=> "Steakhouses",
                "parent_id"=> 56
            ],
            [
                "id"=> 78,
                "name"=> "Spanish",
                "parent_id"=> 56
            ],
            [
                "id"=> 79,
                "name"=> "Seafood",
                "parent_id"=> 56
            ],
            [
                "id"=> 80,
                "name"=> "Scandinavian",
                "parent_id"=> 56
            ],
            [
                "id"=> 81,
                "name"=> "Portuguese",
                "parent_id"=> 56
            ],
            [
                "id"=> 82,
                "name"=> "Pizza",
                "parent_id"=> 56
            ],
            [
                "id"=> 83,
                "name"=> "Moroccan",
                "parent_id"=> 56
            ],
            [
                "id"=> 84,
                "name"=> "Middle Eastern",
                "parent_id"=> 56
            ],
            [
                "id"=> 85,
                "name"=> "Mexican",
                "parent_id"=> 56
            ],
            [
                "id"=> 86,
                "name"=> "Mediterranean",
                "parent_id"=> 56
            ],
            [
                "id"=> 87,
                "name"=> "Latin American",
                "parent_id"=> 56
            ],
            [
                "id"=> 88,
                "name"=> "Korean",
                "parent_id"=> 56
            ],
            [
                "id"=> 89,
                "name"=> "Juice Bar",
                "parent_id"=> 56
            ],
            [
                "id"=> 90,
                "name"=> "Japanese",
                "parent_id"=> 56
            ],
            [
                "id"=> 91,
                "name"=> "Italian",
                "parent_id"=> 56
            ],
            [
                "id"=> 92,
                "name"=> "Indonesian",
                "parent_id"=> 56
            ],
            [
                "id"=> 93,
                "name"=> "Indian",
                "parent_id"=> 56
            ],
            [
                "id"=> 94,
                "name"=> "Ice Cream",
                "parent_id"=> 56
            ],
            [
                "id"=> 95,
                "name"=> "Greek",
                "parent_id"=> 56
            ],
            [
                "id"=> 96,
                "name"=> "German",
                "parent_id"=> 56
            ],
            [
                "id"=> 97,
                "name"=> "Gastropub",
                "parent_id"=> 56
            ],
            [
                "id"=> 98,
                "name"=> "French",
                "parent_id"=> 56
            ],
            [
                "id"=> 99,
                "name"=> "Food Truck",
                "parent_id"=> 56
            ],
            [
                "id"=> 100,
                "name"=> "Fish and Chips",
                "parent_id"=> 56
            ],
            [
                "id"=> 101,
                "name"=> "Filipino",
                "parent_id"=> 56
            ],
            [
                "id"=> 102,
                "name"=> "Fast Food",
                "parent_id"=> 56
            ],
            [
                "id"=> 103,
                "name"=> "Falafel",
                "parent_id"=> 56
            ],
            [
                "id"=> 104,
                "name"=> "Ethiopian",
                "parent_id"=> 56
            ],
            [
                "id"=> 105,
                "name"=> "Eastern European",
                "parent_id"=> 56
            ],
            [
                "id"=> 106,
                "name"=> "Donuts",
                "parent_id"=> 56
            ],
            [
                "id"=> 107,
                "name"=> "Distillery",
                "parent_id"=> 56
            ],
            [
                "id"=> 108,
                "name"=> "Diners",
                "parent_id"=> 56
            ],
            [
                "id"=> 109,
                "name"=> "Dessert",
                "parent_id"=> 56
            ],
            [
                "id"=> 110,
                "name"=> "Delis",
                "parent_id"=> 56
            ],
            [
                "id"=> 111,
                "name"=> "Cupcake Shop",
                "parent_id"=> 56
            ],
            [
                "id"=> 112,
                "name"=> "Cuban",
                "parent_id"=> 56
            ],
            [
                "id"=> 113,
                "name"=> "Coffee Shop",
                "parent_id"=> 56
            ],
            [
                "id"=> 114,
                "name"=> "Chinese",
                "parent_id"=> 56
            ],
            [
                "id"=> 115,
                "name"=> "Caribbean",
                "parent_id"=> 56
            ],
            [
                "id"=> 116,
                "name"=> "Cajun",
                "parent_id"=> 56
            ],
            [
                "id"=> 117,
                "name"=> "Cafe",
                "parent_id"=> 56
            ],
            [
                "id"=> 118,
                "name"=> "Burrito",
                "parent_id"=> 56
            ],
            [
                "id"=> 119,
                "name"=> "Burgers",
                "parent_id"=> 56
            ],
            [
                "id"=> 120,
                "name"=> "Breakfast Spot",
                "parent_id"=> 56
            ],
            [
                "id"=> 121,
                "name"=> "Brazilian",
                "parent_id"=> 56
            ],
            [
                "id"=> 122,
                "name"=> "Barbecue",
                "parent_id"=> 56
            ],
            [
                "id"=> 123,
                "name"=> "Bakery",
                "parent_id"=> 56
            ],
            [
                "id"=> 124,
                "name"=> "Bagel Shop",
                "parent_id"=> 56
            ],
            [
                "id"=> 125,
                "name"=> "Australian",
                "parent_id"=> 56
            ],
            [
                "id"=> 126,
                "name"=> "Asian",
                "parent_id"=> 56
            ],
            [
                "id"=> 127,
                "name"=> "American",
                "parent_id"=> 56
            ],
            [
                "id"=> 128,
                "name"=> "African",
                "parent_id"=> 56
            ],
            [
                "id"=> 129,
                "name"=> "Afghan",
                "parent_id"=> 56
            ],
            [
                "id"=> 130,
                "name"=> "Healthcare",
            ],
            [
                "id"=> 131,
                "name"=> "Healthcare Services",
                "parent_id"=> 130
            ],
            [
                "id"=> 132,
                "name"=> "Psychologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 133,
                "name"=> "Pregnancy and Sexual Health",
                "parent_id"=> 130
            ],
            [
                "id"=> 134,
                "name"=> "Podiatrists",
                "parent_id"=> 130
            ],
            [
                "id"=> 135,
                "name"=> "Physical Therapy",
                "parent_id"=> 130
            ],
            [
                "id"=> 136,
                "name"=> "Optometrists",
                "parent_id"=> 130
            ],
            [
                "id"=> 137,
                "name"=> "Nutritionists",
                "parent_id"=> 130
            ],
            [
                "id"=> 138,
                "name"=> "Nurses",
                "parent_id"=> 130
            ],
            [
                "id"=> 139,
                "name"=> "Mental Health",
                "parent_id"=> 130
            ],
            [
                "id"=> 140,
                "name"=> "Medical Supplies and Labs",
                "parent_id"=> 130
            ],
            [
                "id"=> 141,
                "name"=> " Clinics and Medical Centers",
                "parent_id"=> 130
            ],
            [
                "id"=> 142,
                "name"=> "Emergency Services",
                "parent_id"=> 130
            ],
            [
                "id"=> 143,
                "name"=> "Dentists",
                "parent_id"=> 130
            ],
            [
                "id"=> 144,
                "name"=> "Counseling and Therapy",
                "parent_id"=> 130
            ],
            [
                "id"=> 145,
                "name"=> "Chiropractors",
                "parent_id"=> 130
            ],
            [
                "id"=> 146,
                "name"=> "Blood Banks and Centers",
                "parent_id"=> 130
            ],
            [
                "id"=> 147,
                "name"=> "Alternative Medicine",
                "parent_id"=> 130
            ],
            [
                "id"=> 148,
                "name"=> "Acupuncture",
                "parent_id"=> 130
            ],
            [
                "id"=> 149,
                "name"=> "Physicians",
                "parent_id"=> 130
            ],
            [
                "id"=> 150,
                "name"=> "Urologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 151,
                "name"=> "Respiratory",
                "parent_id"=> 130
            ],
            [
                "id"=> 152,
                "name"=> "Radiologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 153,
                "name"=> "Psychiatrists",
                "parent_id"=> 130
            ],
            [
                "id"=> 154,
                "name"=> "Plastic Surgeons",
                "parent_id"=> 130
            ],
            [
                "id"=> 155,
                "name"=> "Pediatricians",
                "parent_id"=> 130
            ],
            [
                "id"=> 156,
                "name"=> "Pathologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 157,
                "name"=> "Orthopedic Surgeons",
                "parent_id"=> 130
            ],
            [
                "id"=> 158,
                "name"=> "Ophthalmologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 159,
                "name"=> "Oncologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 160,
                "name"=> "Obstetricians and Gynecologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 161,
                "name"=> "Neurologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 162,
                "name"=> "Internal Medicine",
                "parent_id"=> 130
            ],
            [
                "id"=> 163,
                "name"=> "General Surgery",
                "parent_id"=> 130
            ],
            [
                "id"=> 164,
                "name"=> "Gastroenterologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 165,
                "name"=> "Family Medicine",
                "parent_id"=> 130
            ],
            [
                "id"=> 166,
                "name"=> " Nose and Throat",
                "parent_id"=> 130
            ],
            [
                "id"=> 167,
                "name"=> "Dermatologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 168,
                "name"=> "Cardiologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 169,
                "name"=> "Anesthesiologists",
                "parent_id"=> 130
            ],
            [
                "id"=> 170,
                "name"=> "Interest",
            ],
            [
                "id"=> 171,
                "name"=> "Interest Earned",
                "parent_id"=> 170
            ],
            [
                "id"=> 172,
                "name"=> "Interest Charged",
                "parent_id"=> 170
            ],
            [
                "id"=> 173,
                "name"=> "Payment",
            ],
            [
                "id"=> 174,
                "name"=> "Credit Card",
                "parent_id"=> 173
            ],
            [
                "id"=> 175,
                "name"=> "Rent",
                "parent_id"=> 173
            ],
            [
                "id"=> 176,
                "name"=> "Loan",
                "parent_id"=> 173
            ],
            [
                "id"=> 177,
                "name"=> "Recreation",
            ],
            [
                "id"=> 178,
                "name"=> "Arts and Entertainment",
                "parent_id"=> 177
            ],
            [
                "id"=> 179,
                "name"=> "Theatrical Productions",
                "parent_id"=> 177
            ],
            [
                "id"=> 180,
                "name"=> "Symphony and Opera",
                "parent_id"=> 177
            ],
            [
                "id"=> 181,
                "name"=> "Sports Venues",
                "parent_id"=> 177
            ],
            [
                "id"=> 182,
                "name"=> "Social Clubs",
                "parent_id"=> 177
            ],
            [
                "id"=> 183,
                "name"=> "Psychics and Astrologers",
                "parent_id"=> 177
            ],
            [
                "id"=> 184,
                "name"=> "Party Centers",
                "parent_id"=> 177
            ],
            [
                "id"=> 185,
                "name"=> "Music and Show Venues",
                "parent_id"=> 177
            ],
            [
                "id"=> 186,
                "name"=> "Museums",
                "parent_id"=> 177
            ],
            [
                "id"=> 187,
                "name"=> "Movie Theatres",
                "parent_id"=> 177
            ],
            [
                "id"=> 188,
                "name"=> "Fairgrounds and Rodeos",
                "parent_id"=> 177
            ],
            [
                "id"=> 189,
                "name"=> "Entertainment",
                "parent_id"=> 177
            ],
            [
                "id"=> 190,
                "name"=> "Dance Halls and Saloons",
                "parent_id"=> 177
            ],
            [
                "id"=> 191,
                "name"=> "Circuses and Carnivals",
                "parent_id"=> 177
            ],
            [
                "id"=> 192,
                "name"=> "Casinos and Gaming",
                "parent_id"=> 177
            ],
            [
                "id"=> 193,
                "name"=> "Bowling",
                "parent_id"=> 177
            ],
            [
                "id"=> 194,
                "name"=> "Billiards and Pool",
                "parent_id"=> 177
            ],
            [
                "id"=> 195,
                "name"=> "Art Dealers and Galleries",
                "parent_id"=> 177
            ],
            [
                "id"=> 196,
                "name"=> "Arcades and Amusement Parks",
                "parent_id"=> 177
            ],
            [
                "id"=> 197,
                "name"=> "Aquarium",
                "parent_id"=> 177
            ],
            [
                "id"=> 198,
                "name"=> "Athletic Fields",
                "parent_id"=> 177
            ],
            [
                "id"=> 199,
                "name"=> "Baseball",
                "parent_id"=> 177
            ],
            [
                "id"=> 200,
                "name"=> "Basketball",
                "parent_id"=> 177
            ],
            [
                "id"=> 201,
                "name"=> "Batting Cages",
                "parent_id"=> 177
            ],
            [
                "id"=> 202,
                "name"=> "Boating",
                "parent_id"=> 177
            ],
            [
                "id"=> 203,
                "name"=> "Campgrounds and RV Parks",
                "parent_id"=> 177
            ],
            [
                "id"=> 204,
                "name"=> "Canoes and Kayaks",
                "parent_id"=> 177
            ],
            [
                "id"=> 205,
                "name"=> "Combat Sports",
                "parent_id"=> 177
            ],
            [
                "id"=> 206,
                "name"=> "Cycling",
                "parent_id"=> 177
            ],
            [
                "id"=> 207,
                "name"=> "Dance",
                "parent_id"=> 177
            ],
            [
                "id"=> 208,
                "name"=> "Equestrian",
                "parent_id"=> 177
            ],
            [
                "id"=> 209,
                "name"=> "Football",
                "parent_id"=> 177
            ],
            [
                "id"=> 210,
                "name"=> "Go Carts",
                "parent_id"=> 177
            ],
            [
                "id"=> 211,
                "name"=> "Golf",
                "parent_id"=> 177
            ],
            [
                "id"=> 212,
                "name"=> "Gun Ranges",
                "parent_id"=> 177
            ],
            [
                "id"=> 213,
                "name"=> "Gymnastics",
                "parent_id"=> 177
            ],
            [
                "id"=> 214,
                "name"=> "Gyms and Fitness Centers",
                "parent_id"=> 177
            ],
            [
                "id"=> 215,
                "name"=> "Hiking",
                "parent_id"=> 177
            ],
            [
                "id"=> 216,
                "name"=> "Hockey",
                "parent_id"=> 177
            ],
            [
                "id"=> 217,
                "name"=> "Hot Air Balloons",
                "parent_id"=> 177
            ],
            [
                "id"=> 218,
                "name"=> "Hunting and Fishing",
                "parent_id"=> 177
            ],
            [
                "id"=> 219,
                "name"=> "Landmarks",
                "parent_id"=> 177
            ],
            [
                "id"=> 220,
                "name"=> "Monuments and Memorials",
                "parent_id"=> 177
            ],
            [
                "id"=> 221,
                "name"=> "Historic Sites",
                "parent_id"=> 177
            ],
            [
                "id"=> 222,
                "name"=> "Gardens",
                "parent_id"=> 177
            ],
            [
                "id"=> 223,
                "name"=> "Buildings and Structures",
                "parent_id"=> 177
            ],
            [
                "id"=> 224,
                "name"=> "Miniature Golf",
                "parent_id"=> 177
            ],
            [
                "id"=> 225,
                "name"=> "Outdoors",
                "parent_id"=> 177
            ],
            [
                "id"=> 226,
                "name"=> "Rivers",
                "parent_id"=> 177
            ],
            [
                "id"=> 227,
                "name"=> "Mountains",
                "parent_id"=> 177
            ],
            [
                "id"=> 228,
                "name"=> "Lakes",
                "parent_id"=> 177
            ],
            [
                "id"=> 229,
                "name"=> "Forests",
                "parent_id"=> 177
            ],
            [
                "id"=> 230,
                "name"=> "Beaches",
                "parent_id"=> 177
            ],
            [
                "id"=> 231,
                "name"=> "Paintball",
                "parent_id"=> 177
            ],
            [
                "id"=> 232,
                "name"=> "Parks",
                "parent_id"=> 177
            ],
            [
                "id"=> 233,
                "name"=> "Playgrounds",
                "parent_id"=> 177
            ],
            [
                "id"=> 234,
                "name"=> "Picnic Areas",
                "parent_id"=> 177
            ],
            [
                "id"=> 235,
                "name"=> "Natural Parks",
                "parent_id"=> 177
            ],
            [
                "id"=> 236,
                "name"=> "Personal Trainers",
                "parent_id"=> 177
            ],
            [
                "id"=> 237,
                "name"=> "Race Tracks",
                "parent_id"=> 177
            ],
            [
                "id"=> 238,
                "name"=> "Racquet Sports",
                "parent_id"=> 177
            ],
            [
                "id"=> 239,
                "name"=> "Racquetball",
                "parent_id"=> 177
            ],
            [
                "id"=> 240,
                "name"=> "Rafting",
                "parent_id"=> 177
            ],
            [
                "id"=> 241,
                "name"=> "Recreation Centers",
                "parent_id"=> 177
            ],
            [
                "id"=> 242,
                "name"=> "Rock Climbing",
                "parent_id"=> 177
            ],
            [
                "id"=> 243,
                "name"=> "Running",
                "parent_id"=> 177
            ],
            [
                "id"=> 244,
                "name"=> "Scuba Diving",
                "parent_id"=> 177
            ],
            [
                "id"=> 245,
                "name"=> "Skating",
                "parent_id"=> 177
            ],
            [
                "id"=> 246,
                "name"=> "Skydiving",
                "parent_id"=> 177
            ],
            [
                "id"=> 247,
                "name"=> "Snow Sports",
                "parent_id"=> 177
            ],
            [
                "id"=> 248,
                "name"=> "Soccer",
                "parent_id"=> 177
            ],
            [
                "id"=> 249,
                "name"=> "Sports and Recreation Camps",
                "parent_id"=> 177
            ],
            [
                "id"=> 250,
                "name"=> "Sports Clubs",
                "parent_id"=> 177
            ],
            [
                "id"=> 251,
                "name"=> "Stadiums and Arenas",
                "parent_id"=> 177
            ],
            [
                "id"=> 252,
                "name"=> "Swimming",
                "parent_id"=> 177
            ],
            [
                "id"=> 253,
                "name"=> "Tennis",
                "parent_id"=> 177
            ],
            [
                "id"=> 254,
                "name"=> "Water Sports",
                "parent_id"=> 177
            ],
            [
                "id"=> 255,
                "name"=> "Yoga and Pilates",
                "parent_id"=> 177
            ],
            [
                "id"=> 256,
                "name"=> "Zoo",
                "parent_id"=> 177
            ],
            [
                "id"=> 257,
                "name"=> "Service",
            ],
            [
                "id"=> 258,
                "name"=> "Advertising and Marketing",
                "parent_id"=> 257
            ],
            [
                "id"=> 259,
                "name"=> " Copywriting and Technical Writing",
                "parent_id"=> 257
            ],
            [
                "id"=> 260,
                "name"=> "Search Engine Marketing and Optimization",
                "parent_id"=> 257
            ],
            [
                "id"=> 261,
                "name"=> "Public Relations",
                "parent_id"=> 257
            ],
            [
                "id"=> 262,
                "name"=> "Promotional Items",
                "parent_id"=> 257
            ],
            [
                "id"=> 263,
                "name"=> " Radio and Outdoor Advertising",
                "parent_id"=> 257
            ],
            [
                "id"=> 264,
                "name"=> "Online Advertising",
                "parent_id"=> 257
            ],
            [
                "id"=> 265,
                "name"=> "Market Research and Consulting",
                "parent_id"=> 257
            ],
            [
                "id"=> 266,
                "name"=> "Direct Mail and Email Marketing Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 267,
                "name"=> "Creative Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 268,
                "name"=> "Advertising Agencies and Media Buyers",
                "parent_id"=> 257
            ],
            [
                "id"=> 269,
                "name"=> "Art Restoration",
                "parent_id"=> 257
            ],
            [
                "id"=> 270,
                "name"=> "Audiovisual",
                "parent_id"=> 257
            ],
            [
                "id"=> 271,
                "name"=> "Automation and Control Systems",
                "parent_id"=> 257
            ],
            [
                "id"=> 272,
                "name"=> "Automotive",
                "parent_id"=> 257
            ],
            [
                "id"=> 273,
                "name"=> "Towing",
                "parent_id"=> 257
            ],
            [
                "id"=> 274,
                "name"=> " Moped and Scooter Repair",
                "parent_id"=> 257
            ],
            [
                "id"=> 275,
                "name"=> "Maintenance and Repair",
                "parent_id"=> 257
            ],
            [
                "id"=> 276,
                "name"=> "Car Wash and Detail",
                "parent_id"=> 257
            ],
            [
                "id"=> 277,
                "name"=> "Car Appraisers",
                "parent_id"=> 257
            ],
            [
                "id"=> 278,
                "name"=> "Auto Transmission",
                "parent_id"=> 257
            ],
            [
                "id"=> 279,
                "name"=> "Auto Tires",
                "parent_id"=> 257
            ],
            [
                "id"=> 280,
                "name"=> "Auto Smog Check",
                "parent_id"=> 257
            ],
            [
                "id"=> 281,
                "name"=> "Auto Oil and Lube",
                "parent_id"=> 257
            ],
            [
                "id"=> 282,
                "name"=> "Business and Strategy Consulting",
                "parent_id"=> 257
            ],
            [
                "id"=> 283,
                "name"=> "Business Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 284,
                "name"=> "Printing and Publishing",
                "parent_id"=> 257
            ],
            [
                "id"=> 285,
                "name"=> "Cable",
                "parent_id"=> 257
            ],
            [
                "id"=> 286,
                "name"=> "Chemicals and Gasses",
                "parent_id"=> 257
            ],
            [
                "id"=> 287,
                "name"=> "Cleaning",
                "parent_id"=> 257
            ],
            [
                "id"=> 288,
                "name"=> "Computers",
                "parent_id"=> 257
            ],
            [
                "id"=> 289,
                "name"=> "Maintenance and Repair",
                "parent_id"=> 257
            ],
            [
                "id"=> 290,
                "name"=> "Software Development",
                "parent_id"=> 257
            ],
            [
                "id"=> 291,
                "name"=> "Construction",
                "parent_id"=> 257
            ],
            [
                "id"=> 292,
                "name"=> "Specialty",
                "parent_id"=> 257
            ],
            [
                "id"=> 293,
                "name"=> "Roofers",
                "parent_id"=> 257
            ],
            [
                "id"=> 294,
                "name"=> "Painting",
                "parent_id"=> 257
            ],
            [
                "id"=> 295,
                "name"=> "Masonry",
                "parent_id"=> 257
            ],
            [
                "id"=> 296,
                "name"=> "Infrastructure",
                "parent_id"=> 257
            ],
            [
                "id"=> 297,
                "name"=> " Ventilating and Air Conditioning",
                "parent_id"=> 257
            ],
            [
                "id"=> 298,
                "name"=> "Electricians",
                "parent_id"=> 257
            ],
            [
                "id"=> 299,
                "name"=> "Contractors",
                "parent_id"=> 257
            ],
            [
                "id"=> 300,
                "name"=> "Carpet and Flooring",
                "parent_id"=> 257
            ],
            [
                "id"=> 301,
                "name"=> "Carpenters",
                "parent_id"=> 257
            ],
            [
                "id"=> 302,
                "name"=> "Credit Counseling and Bankruptcy Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 303,
                "name"=> "Dating and Escort",
                "parent_id"=> 257
            ],
            [
                "id"=> 304,
                "name"=> "Employment Agencies",
                "parent_id"=> 257
            ],
            [
                "id"=> 305,
                "name"=> "Engineering",
                "parent_id"=> 257
            ],
            [
                "id"=> 306,
                "name"=> "Entertainment",
                "parent_id"=> 257
            ],
            [
                "id"=> 307,
                "name"=> "Media",
                "parent_id"=> 257
            ],
            [
                "id"=> 308,
                "name"=> "Events and Event Planning",
                "parent_id"=> 257
            ],
            [
                "id"=> 309,
                "name"=> "Financial",
                "parent_id"=> 257
            ],
            [
                "id"=> 310,
                "name"=> "Taxes",
                "parent_id"=> 257
            ],
            [
                "id"=> 311,
                "name"=> "Student Aid and Grants",
                "parent_id"=> 257
            ],
            [
                "id"=> 312,
                "name"=> "Stock Brokers",
                "parent_id"=> 257
            ],
            [
                "id"=> 313,
                "name"=> "Loans and Mortgages",
                "parent_id"=> 257
            ],
            [
                "id"=> 314,
                "name"=> "Holding and Investment Offices",
                "parent_id"=> 257
            ],
            [
                "id"=> 315,
                "name"=> "Fund Raising",
                "parent_id"=> 257
            ],
            [
                "id"=> 316,
                "name"=> "Financial Planning and Investments",
                "parent_id"=> 257
            ],
            [
                "id"=> 317,
                "name"=> "Credit Reporting",
                "parent_id"=> 257
            ],
            [
                "id"=> 318,
                "name"=> "Collections",
                "parent_id"=> 257
            ],
            [
                "id"=> 319,
                "name"=> "Check Cashing",
                "parent_id"=> 257
            ],
            [
                "id"=> 320,
                "name"=> "Business Brokers and Franchises",
                "parent_id"=> 257
            ],
            [
                "id"=> 321,
                "name"=> "Banking and Finance",
                "parent_id"=> 257
            ],
            [
                "id"=> 322,
                "name"=> "ATMs",
                "parent_id"=> 257
            ],
            [
                "id"=> 323,
                "name"=> "Accounting and Bookkeeping",
                "parent_id"=> 257
            ],
            [
                "id"=> 324,
                "name"=> "Food and Beverage",
                "parent_id"=> 257
            ],
            [
                "id"=> 325,
                "name"=> "Distribution",
                "parent_id"=> 257
            ],
            [
                "id"=> 326,
                "name"=> "Catering",
                "parent_id"=> 257
            ],
            [
                "id"=> 327,
                "name"=> "Funeral Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 328,
                "name"=> "Geological",
                "parent_id"=> 257
            ],
            [
                "id"=> 329,
                "name"=> "Home Improvement",
                "parent_id"=> 257
            ],
            [
                "id"=> 330,
                "name"=> "Upholstery",
                "parent_id"=> 257
            ],
            [
                "id"=> 331,
                "name"=> "Tree Service",
                "parent_id"=> 257
            ],
            [
                "id"=> 332,
                "name"=> "Swimming Pool Maintenance and Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 333,
                "name"=> "Storage",
                "parent_id"=> 257
            ],
            [
                "id"=> 334,
                "name"=> "Roofers",
                "parent_id"=> 257
            ],
            [
                "id"=> 335,
                "name"=> "Pools and Spas",
                "parent_id"=> 257
            ],
            [
                "id"=> 336,
                "name"=> "Plumbing",
                "parent_id"=> 257
            ],
            [
                "id"=> 337,
                "name"=> "Pest Control",
                "parent_id"=> 257
            ],
            [
                "id"=> 338,
                "name"=> "Painting",
                "parent_id"=> 257
            ],
            [
                "id"=> 339,
                "name"=> "Movers",
                "parent_id"=> 257
            ],
            [
                "id"=> 340,
                "name"=> "Mobile Homes",
                "parent_id"=> 257
            ],
            [
                "id"=> 341,
                "name"=> "Lighting Fixtures",
                "parent_id"=> 257
            ],
            [
                "id"=> 342,
                "name"=> "Landscaping and Gardeners",
                "parent_id"=> 257
            ],
            [
                "id"=> 343,
                "name"=> "Kitchens",
                "parent_id"=> 257
            ],
            [
                "id"=> 344,
                "name"=> "Interior Design",
                "parent_id"=> 257
            ],
            [
                "id"=> 345,
                "name"=> "Housewares",
                "parent_id"=> 257
            ],
            [
                "id"=> 346,
                "name"=> "Home Inspection Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 347,
                "name"=> "Home Appliances",
                "parent_id"=> 257
            ],
            [
                "id"=> 348,
                "name"=> " Ventilation and Air Conditioning",
                "parent_id"=> 257
            ],
            [
                "id"=> 349,
                "name"=> "Hardware and Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 350,
                "name"=> " Fireplaces and Garage Doors",
                "parent_id"=> 257
            ],
            [
                "id"=> 351,
                "name"=> "Electricians",
                "parent_id"=> 257
            ],
            [
                "id"=> 352,
                "name"=> "Doors and Windows",
                "parent_id"=> 257
            ],
            [
                "id"=> 353,
                "name"=> "Contractors",
                "parent_id"=> 257
            ],
            [
                "id"=> 354,
                "name"=> "Carpet and Flooring",
                "parent_id"=> 257
            ],
            [
                "id"=> 355,
                "name"=> "Carpenters",
                "parent_id"=> 257
            ],
            [
                "id"=> 356,
                "name"=> "Architects",
                "parent_id"=> 257
            ],
            [
                "id"=> 357,
                "name"=> "Household",
                "parent_id"=> 257
            ],
            [
                "id"=> 358,
                "name"=> "Human Resources",
                "parent_id"=> 257
            ],
            [
                "id"=> 359,
                "name"=> "Immigration",
                "parent_id"=> 257
            ],
            [
                "id"=> 360,
                "name"=> "Import and Export",
                "parent_id"=> 257
            ],
            [
                "id"=> 361,
                "name"=> "Industrial Machinery and Vehicles",
                "parent_id"=> 257
            ],
            [
                "id"=> 362,
                "name"=> "Insurance",
                "parent_id"=> 257
            ],
            [
                "id"=> 363,
                "name"=> "Internet Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 364,
                "name"=> "Leather",
                "parent_id"=> 257
            ],
            [
                "id"=> 365,
                "name"=> "Legal",
                "parent_id"=> 257
            ],
            [
                "id"=> 366,
                "name"=> "Logging and Sawmills",
                "parent_id"=> 257
            ],
            [
                "id"=> 367,
                "name"=> "Machine Shops",
                "parent_id"=> 257
            ],
            [
                "id"=> 368,
                "name"=> "Management",
                "parent_id"=> 257
            ],
            [
                "id"=> 369,
                "name"=> "Manufacturing",
                "parent_id"=> 257
            ],
            [
                "id"=> 370,
                "name"=> "Apparel and Fabric Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 371,
                "name"=> "Chemicals and Gasses",
                "parent_id"=> 257
            ],
            [
                "id"=> 372,
                "name"=> "Computers and Office Machines",
                "parent_id"=> 257
            ],
            [
                "id"=> 373,
                "name"=> "Electrical Equipment and Components",
                "parent_id"=> 257
            ],
            [
                "id"=> 374,
                "name"=> "Food and Beverage",
                "parent_id"=> 257
            ],
            [
                "id"=> 375,
                "name"=> "Furniture and Fixtures",
                "parent_id"=> 257
            ],
            [
                "id"=> 376,
                "name"=> "Glass Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 377,
                "name"=> "Industrial Machinery and Equipment",
                "parent_id"=> 257
            ],
            [
                "id"=> 378,
                "name"=> "Leather Goods",
                "parent_id"=> 257
            ],
            [
                "id"=> 379,
                "name"=> "Metal Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 380,
                "name"=> "Nonmetallic Mineral Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 381,
                "name"=> "Paper Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 382,
                "name"=> "Petroleum",
                "parent_id"=> 257
            ],
            [
                "id"=> 383,
                "name"=> "Plastic Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 384,
                "name"=> "Rubber Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 385,
                "name"=> "Service Instruments",
                "parent_id"=> 257
            ],
            [
                "id"=> 386,
                "name"=> "Textiles",
                "parent_id"=> 257
            ],
            [
                "id"=> 387,
                "name"=> "Tobacco",
                "parent_id"=> 257
            ],
            [
                "id"=> 388,
                "name"=> "Transportation Equipment",
                "parent_id"=> 257
            ],
            [
                "id"=> 389,
                "name"=> "Wood Products",
                "parent_id"=> 257
            ],
            [
                "id"=> 390,
                "name"=> "Media Production",
                "parent_id"=> 257
            ],
            [
                "id"=> 391,
                "name"=> "Metals",
                "parent_id"=> 257
            ],
            [
                "id"=> 392,
                "name"=> "Mining",
                "parent_id"=> 257
            ],
            [
                "id"=> 393,
                "name"=> "Coal",
                "parent_id"=> 257
            ],
            [
                "id"=> 394,
                "name"=> "Metal",
                "parent_id"=> 257
            ],
            [
                "id"=> 395,
                "name"=> "Non-Metallic Minerals",
                "parent_id"=> 257
            ],
            [
                "id"=> 396,
                "name"=> "News Reporting",
                "parent_id"=> 257
            ],
            [
                "id"=> 397,
                "name"=> "Oil and Gas",
                "parent_id"=> 257
            ],
            [
                "id"=> 398,
                "name"=> "Packaging",
                "parent_id"=> 257
            ],
            [
                "id"=> 399,
                "name"=> "Paper",
                "parent_id"=> 257
            ],
            [
                "id"=> 400,
                "name"=> "Personal Care",
                "parent_id"=> 257
            ],
            [
                "id"=> 401,
                "name"=> "Tattooing",
                "parent_id"=> 257
            ],
            [
                "id"=> 402,
                "name"=> "Tanning Salons",
                "parent_id"=> 257
            ],
            [
                "id"=> 403,
                "name"=> "Spas",
                "parent_id"=> 257
            ],
            [
                "id"=> 404,
                "name"=> "Skin Care",
                "parent_id"=> 257
            ],
            [
                "id"=> 405,
                "name"=> "Piercing",
                "parent_id"=> 257
            ],
            [
                "id"=> 406,
                "name"=> "Massage Clinics and Therapists",
                "parent_id"=> 257
            ],
            [
                "id"=> 407,
                "name"=> "Manicures and Pedicures",
                "parent_id"=> 257
            ],
            [
                "id"=> 408,
                "name"=> "Laundry and Garment Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 409,
                "name"=> "Hair Salons and Barbers",
                "parent_id"=> 257
            ],
            [
                "id"=> 410,
                "name"=> "Hair Removal",
                "parent_id"=> 257
            ],
            [
                "id"=> 411,
                "name"=> "Petroleum",
                "parent_id"=> 257
            ],
            [
                "id"=> 412,
                "name"=> "Photography",
                "parent_id"=> 257
            ],
            [
                "id"=> 413,
                "name"=> "Plastics",
                "parent_id"=> 257
            ],
            [
                "id"=> 414,
                "name"=> "Rail",
                "parent_id"=> 257
            ],
            [
                "id"=> 415,
                "name"=> "Real Estate",
                "parent_id"=> 257
            ],
            [
                "id"=> 416,
                "name"=> "Real Estate Development and Title Companies",
                "parent_id"=> 257
            ],
            [
                "id"=> 417,
                "name"=> "Real Estate Appraiser",
                "parent_id"=> 257
            ],
            [
                "id"=> 418,
                "name"=> "Real Estate Agents",
                "parent_id"=> 257
            ],
            [
                "id"=> 419,
                "name"=> "Property Management",
                "parent_id"=> 257
            ],
            [
                "id"=> 420,
                "name"=> "Corporate Housing",
                "parent_id"=> 257
            ],
            [
                "id"=> 421,
                "name"=> "Commercial Real Estate",
                "parent_id"=> 257
            ],
            [
                "id"=> 422,
                "name"=> "Building and Land Surveyors",
                "parent_id"=> 257
            ],
            [
                "id"=> 423,
                "name"=> "Boarding Houses",
                "parent_id"=> 257
            ],
            [
                "id"=> 424,
                "name"=> " Condos and Houses",
                "parent_id"=> 257
            ],
            [
                "id"=> 425,
                "name"=> "Rent",
                "parent_id"=> 257
            ],
            [
                "id"=> 426,
                "name"=> "Refrigeration and Ice",
                "parent_id"=> 257
            ],
            [
                "id"=> 427,
                "name"=> "Renewable Energy",
                "parent_id"=> 257
            ],
            [
                "id"=> 428,
                "name"=> "Repair Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 429,
                "name"=> "Research",
                "parent_id"=> 257
            ],
            [
                "id"=> 430,
                "name"=> "Rubber",
                "parent_id"=> 257
            ],
            [
                "id"=> 431,
                "name"=> "Scientific",
                "parent_id"=> 257
            ],
            [
                "id"=> 432,
                "name"=> "Security and Safety",
                "parent_id"=> 257
            ],
            [
                "id"=> 433,
                "name"=> "Shipping and Freight",
                "parent_id"=> 257
            ],
            [
                "id"=> 434,
                "name"=> "Software Development",
                "parent_id"=> 257
            ],
            [
                "id"=> 435,
                "name"=> "Storage",
                "parent_id"=> 257
            ],
            [
                "id"=> 436,
                "name"=> "Subscription",
                "parent_id"=> 257
            ],
            [
                "id"=> 437,
                "name"=> "Tailors",
                "parent_id"=> 257
            ],
            [
                "id"=> 438,
                "name"=> "Telecommunication Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 439,
                "name"=> "Textiles",
                "parent_id"=> 257
            ],
            [
                "id"=> 440,
                "name"=> "Tourist Information and Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 441,
                "name"=> "Transportation",
                "parent_id"=> 257
            ],
            [
                "id"=> 442,
                "name"=> "Travel Agents and Tour Operators",
                "parent_id"=> 257
            ],
            [
                "id"=> 443,
                "name"=> "Utilities",
                "parent_id"=> 257
            ],
            [
                "id"=> 444,
                "name"=> "Water",
                "parent_id"=> 257
            ],
            [
                "id"=> 445,
                "name"=> "Sanitary and Waste Management",
                "parent_id"=> 257
            ],
            [
                "id"=> 446,
                "name"=> " and Air Conditioning",
                "parent_id"=> 257
            ],
            [
                "id"=> 447,
                "name"=> "Gas",
                "parent_id"=> 257
            ],
            [
                "id"=> 448,
                "name"=> "Electric",
                "parent_id"=> 257
            ],
            [
                "id"=> 449,
                "name"=> "Veterinarians",
                "parent_id"=> 257
            ],
            [
                "id"=> 450,
                "name"=> "Water and Waste Management",
                "parent_id"=> 257
            ],
            [
                "id"=> 451,
                "name"=> "Web Design and Development",
                "parent_id"=> 257
            ],
            [
                "id"=> 452,
                "name"=> "Welding",
                "parent_id"=> 257
            ],
            [
                "id"=> 453,
                "name"=> "Agriculture and Forestry",
                "parent_id"=> 257
            ],
            [
                "id"=> 454,
                "name"=> "Crop Production",
                "parent_id"=> 257
            ],
            [
                "id"=> 455,
                "name"=> "Forestry",
                "parent_id"=> 257
            ],
            [
                "id"=> 456,
                "name"=> "Livestock and Animals",
                "parent_id"=> 257
            ],
            [
                "id"=> 457,
                "name"=> "Services",
                "parent_id"=> 257
            ],
            [
                "id"=> 458,
                "name"=> "Art and Graphic Design",
                "parent_id"=> 257
            ],
            [
                "id"=> 459,
                "name"=> "Shops",
            ],
            [
                "id"=> 460,
                "name"=> "Adult",
                "parent_id"=> 459
            ],
            [
                "id"=> 461,
                "name"=> "Antiques",
                "parent_id"=> 459
            ],
            [
                "id"=> 462,
                "name"=> "Arts and Crafts",
                "parent_id"=> 459
            ],
            [
                "id"=> 463,
                "name"=> "Auctions",
                "parent_id"=> 459
            ],
            [
                "id"=> 464,
                "name"=> "Automotive",
                "parent_id"=> 459
            ],
            [
                "id"=> 465,
                "name"=> "Used Car Dealers",
                "parent_id"=> 459
            ],
            [
                "id"=> 466,
                "name"=> "Salvage Yards",
                "parent_id"=> 459
            ],
            [
                "id"=> 467,
                "name"=> "RVs and Motor Homes",
                "parent_id"=> 459
            ],
            [
                "id"=> 468,
                "name"=> " Mopeds and Scooters",
                "parent_id"=> 459
            ],
            [
                "id"=> 469,
                "name"=> "Classic and Antique Car",
                "parent_id"=> 459
            ],
            [
                "id"=> 470,
                "name"=> "Car Parts and Accessories",
                "parent_id"=> 459
            ],
            [
                "id"=> 471,
                "name"=> "Car Dealers and Leasing",
                "parent_id"=> 459
            ],
            [
                "id"=> 472,
                "name"=> "Beauty Products",
                "parent_id"=> 459
            ],
            [
                "id"=> 473,
                "name"=> "Bicycles",
                "parent_id"=> 459
            ],
            [
                "id"=> 474,
                "name"=> "Boat Dealers",
                "parent_id"=> 459
            ],
            [
                "id"=> 475,
                "name"=> "Bookstores",
                "parent_id"=> 459
            ],
            [
                "id"=> 476,
                "name"=> "Cards and Stationery",
                "parent_id"=> 459
            ],
            [
                "id"=> 477,
                "name"=> "Children",
                "parent_id"=> 459
            ],
            [
                "id"=> 478,
                "name"=> "Clothing and Accessories",
                "parent_id"=> 459
            ],
            [
                "id"=> 479,
                "name"=> " \"Women's Store\"",
                "parent_id"=> 459
            ],
            [
                "id"=> 480,
                "name"=> "Swimwear",
                "parent_id"=> 459
            ],
            [
                "id"=> 481,
                "name"=> "Shoe Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 482,
                "name"=> " \"Men's Store\"",
                "parent_id"=> 459
            ],
            [
                "id"=> 483,
                "name"=> "Lingerie Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 484,
                "name"=> " \"Kids' Store\"",
                "parent_id"=> 459
            ],
            [
                "id"=> 485,
                "name"=> "Boutique",
                "parent_id"=> 459
            ],
            [
                "id"=> 486,
                "name"=> "Accessories Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 487,
                "name"=> "Computers and Electronics",
                "parent_id"=> 459
            ],
            [
                "id"=> 488,
                "name"=> "Video Games",
                "parent_id"=> 459
            ],
            [
                "id"=> 489,
                "name"=> "Mobile Phones",
                "parent_id"=> 459
            ],
            [
                "id"=> 490,
                "name"=> "Cameras",
                "parent_id"=> 459
            ],
            [
                "id"=> 491,
                "name"=> "Construction Supplies",
                "parent_id"=> 459
            ],
            [
                "id"=> 492,
                "name"=> "Convenience Stores",
                "parent_id"=> 459
            ],
            [
                "id"=> 493,
                "name"=> "Costumes",
                "parent_id"=> 459
            ],
            [
                "id"=> 494,
                "name"=> "Dance and Music",
                "parent_id"=> 459
            ],
            [
                "id"=> 495,
                "name"=> "Department Stores",
                "parent_id"=> 459
            ],
            [
                "id"=> 496,
                "name"=> "Digital Purchase",
                "parent_id"=> 459
            ],
            [
                "id"=> 497,
                "name"=> "Discount Stores",
                "parent_id"=> 459
            ],
            [
                "id"=> 498,
                "name"=> "Electrical Equipment",
                "parent_id"=> 459
            ],
            [
                "id"=> 499,
                "name"=> "Equipment Rental",
                "parent_id"=> 459
            ],
            [
                "id"=> 500,
                "name"=> "Flea Markets",
                "parent_id"=> 459
            ],
            [
                "id"=> 501,
                "name"=> "Florists",
                "parent_id"=> 459
            ],
            [
                "id"=> 502,
                "name"=> "Food and Beverage Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 503,
                "name"=> "Specialty",
                "parent_id"=> 459
            ],
            [
                "id"=> 504,
                "name"=> "Health Food",
                "parent_id"=> 459
            ],
            [
                "id"=> 505,
                "name"=> "Farmers Markets",
                "parent_id"=> 459
            ],
            [
                "id"=> 506,
                "name"=> " Wine and Spirits",
                "parent_id"=> 459
            ],
            [
                "id"=> 507,
                "name"=> "Fuel Dealer",
                "parent_id"=> 459
            ],
            [
                "id"=> 508,
                "name"=> "Furniture and Home Decor",
                "parent_id"=> 459
            ],
            [
                "id"=> 509,
                "name"=> "Gift and Novelty",
                "parent_id"=> 459
            ],
            [
                "id"=> 510,
                "name"=> "Glasses and Optometrist",
                "parent_id"=> 459
            ],
            [
                "id"=> 511,
                "name"=> "Hardware Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 512,
                "name"=> "Hobby and Collectibles",
                "parent_id"=> 459
            ],
            [
                "id"=> 513,
                "name"=> "Industrial Supplies",
                "parent_id"=> 459
            ],
            [
                "id"=> 514,
                "name"=> "Jewelry and Watches",
                "parent_id"=> 459
            ],
            [
                "id"=> 515,
                "name"=> "Luggage",
                "parent_id"=> 459
            ],
            [
                "id"=> 516,
                "name"=> "Marine Supplies",
                "parent_id"=> 459
            ],
            [
                "id"=> 517,
                "name"=> " Video and DVD",
                "parent_id"=> 459
            ],
            [
                "id"=> 518,
                "name"=> "Musical Instruments",
                "parent_id"=> 459
            ],
            [
                "id"=> 519,
                "name"=> "Newsstands",
                "parent_id"=> 459
            ],
            [
                "id"=> 520,
                "name"=> "Office Supplies",
                "parent_id"=> 459
            ],
            [
                "id"=> 521,
                "name"=> "Outlet",
                "parent_id"=> 459
            ],
            [
                "id"=> 522,
                "name"=> " \"Women's Store\"",
                "parent_id"=> 459
            ],
            [
                "id"=> 523,
                "name"=> "Swimwear",
                "parent_id"=> 459
            ],
            [
                "id"=> 524,
                "name"=> "Shoe Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 525,
                "name"=> " \"Men's Store\"",
                "parent_id"=> 459
            ],
            [
                "id"=> 526,
                "name"=> "Lingerie Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 527,
                "name"=> " \"Kids' Store\"",
                "parent_id"=> 459
            ],
            [
                "id"=> 528,
                "name"=> "Boutique",
                "parent_id"=> 459
            ],
            [
                "id"=> 529,
                "name"=> "Accessories Store",
                "parent_id"=> 459
            ],
            [
                "id"=> 530,
                "name"=> "Pawn Shops",
                "parent_id"=> 459
            ],
            [
                "id"=> 531,
                "name"=> "Pets",
                "parent_id"=> 459
            ],
            [
                "id"=> 532,
                "name"=> "Pharmacies",
                "parent_id"=> 459
            ],
            [
                "id"=> 533,
                "name"=> "Photos and Frames",
                "parent_id"=> 459
            ],
            [
                "id"=> 534,
                "name"=> "Shopping Centers and Malls",
                "parent_id"=> 459
            ],
            [
                "id"=> 535,
                "name"=> "Sporting Goods",
                "parent_id"=> 459
            ],
            [
                "id"=> 536,
                "name"=> "Supermarkets and Groceries",
                "parent_id"=> 459
            ],
            [
                "id"=> 537,
                "name"=> "Tobacco",
                "parent_id"=> 459
            ],
            [
                "id"=> 538,
                "name"=> "Toys",
                "parent_id"=> 459
            ],
            [
                "id"=> 539,
                "name"=> "Vintage and Thrift",
                "parent_id"=> 459
            ],
            [
                "id"=> 540,
                "name"=> "Warehouses and Wholesale Stores",
                "parent_id"=> 459
            ],
            [
                "id"=> 541,
                "name"=> "Wedding and Bridal",
                "parent_id"=> 459
            ],
            [
                "id"=> 542,
                "name"=> "Wholesale",
                "parent_id"=> 459
            ],
            [
                "id"=> 543,
                "name"=> "Lawn and Garden",
                "parent_id"=> 459
            ],
            [
                "id"=> 544,
                "name"=> "Tax",
            ],
            [
                "id"=> 545,
                "name"=> "Refund",
                "parent_id"=> 544
            ],
            [
                "id"=> 546,
                "name"=> "Payment",
                "parent_id"=> 544
            ],
            [
                "id"=> 547,
                "name"=> "Transfer",
            ],
            [
                "id"=> 548,
                "name"=> "Internal Account Transfer",
                "parent_id"=> 547
            ],
            [
                "id"=> 549,
                "name"=> "ACH",
                "parent_id"=> 547
            ],
            [
                "id"=> 550,
                "name"=> "Billpay",
                "parent_id"=> 547
            ],
            [
                "id"=> 551,
                "name"=> "Check",
                "parent_id"=> 547
            ],
            [
                "id"=> 552,
                "name"=> "Credit",
                "parent_id"=> 547
            ],
            [
                "id"=> 553,
                "name"=> "Debit",
                "parent_id"=> 547
            ],
            [
                "id"=> 554,
                "name"=> "Deposit",
                "parent_id"=> 547
            ],
            [
                "id"=> 555,
                "name"=> "Check",
                "parent_id"=> 547
            ],
            [
                "id"=> 556,
                "name"=> "ATM",
                "parent_id"=> 547
            ],
            [
                "id"=> 557,
                "name"=> "Keep the Change Savings Program",
                "parent_id"=> 547
            ],
            [
                "id"=> 558,
                "name"=> "Payroll",
                "parent_id"=> 547
            ],
            [
                "id"=> 559,
                "name"=> "Benefits",
                "parent_id"=> 547
            ],
            [
                "id"=> 560,
                "name"=> "Third Party",
                "parent_id"=> 547
            ],
            [
                "id"=> 561,
                "name"=> "Venmo",
                "parent_id"=> 547
            ],
            [
                "id"=> 562,
                "name"=> "Square Cash",
                "parent_id"=> 547
            ],
            [
                "id"=> 563,
                "name"=> "Square",
                "parent_id"=> 547
            ],
            [
                "id"=> 564,
                "name"=> "PayPal",
                "parent_id"=> 547
            ],
            [
                "id"=> 565,
                "name"=> "Dwolla",
                "parent_id"=> 547
            ],
            [
                "id"=> 566,
                "name"=> "Coinbase",
                "parent_id"=> 547
            ],
            [
                "id"=> 567,
                "name"=> "Chase QuickPay",
                "parent_id"=> 547
            ],
            [
                "id"=> 568,
                "name"=> "Acorns",
                "parent_id"=> 547
            ],
            [
                "id"=> 569,
                "name"=> "Digit",
                "parent_id"=> 547
            ],
            [
                "id"=> 570,
                "name"=> "Betterment",
                "parent_id"=> 547
            ],
            [
                "id"=> 571,
                "name"=> "Plaid",
                "parent_id"=> 547
            ],
            [
                "id"=> 572,
                "name"=> "Wire",
                "parent_id"=> 547
            ],
            [
                "id"=> 573,
                "name"=> "Withdrawal",
                "parent_id"=> 547
            ],
            [
                "id"=> 574,
                "name"=> "Check",
                "parent_id"=> 547
            ],
            [
                "id"=> 575,
                "name"=> "ATM",
                "parent_id"=> 547
            ],
            [
                "id"=> 576,
                "name"=> "Save As You Go",
                "parent_id"=> 547
            ],
            [
                "id"=> 577,
                "name"=> "Travel",
            ],
            [
                "id"=> 578,
                "name"=> "Airlines and Aviation Services",
                "parent_id"=> 577
            ],
            [
                "id"=> 579,
                "name"=> "Airports",
                "parent_id"=> 577
            ],
            [
                "id"=> 580,
                "name"=> "Boat",
                "parent_id"=> 577
            ],
            [
                "id"=> 581,
                "name"=> "Bus Stations",
                "parent_id"=> 577
            ],
            [
                "id"=> 582,
                "name"=> "Car and Truck Rentals",
                "parent_id"=> 577
            ],
            [
                "id"=> 583,
                "name"=> "Car Service",
                "parent_id"=> 577
            ],
            [
                "id"=> 584,
                "name"=> "Ride Share",
                "parent_id"=> 577
            ],
            [
                "id"=> 585,
                "name"=> "Charter Buses",
                "parent_id"=> 577
            ],
            [
                "id"=> 586,
                "name"=> "Cruises",
                "parent_id"=> 577
            ],
            [
                "id"=> 587,
                "name"=> "Gas Stations",
                "parent_id"=> 577
            ],
            [
                "id"=> 588,
                "name"=> "Heliports",
                "parent_id"=> 577
            ],
            [
                "id"=> 589,
                "name"=> "Limos and Chauffeurs",
                "parent_id"=> 577
            ],
            [
                "id"=> 590,
                "name"=> "Lodging",
                "parent_id"=> 577
            ],
            [
                "id"=> 591,
                "name"=> "Resorts",
                "parent_id"=> 577
            ],
            [
                "id"=> 592,
                "name"=> "Lodges and Vacation Rentals",
                "parent_id"=> 577
            ],
            [
                "id"=> 593,
                "name"=> "Hotels and Motels",
                "parent_id"=> 577
            ],
            [
                "id"=> 594,
                "name"=> "Hostels",
                "parent_id"=> 577
            ],
            [
                "id"=> 595,
                "name"=> "Cottages and Cabins",
                "parent_id"=> 577
            ],
            [
                "id"=> 596,
                "name"=> "Bed and Breakfasts",
                "parent_id"=> 577
            ],
            [
                "id"=> 597,
                "name"=> "Parking",
                "parent_id"=> 577
            ],
            [
                "id"=> 598,
                "name"=> "Public Transportation Services",
                "parent_id"=> 577
            ],
            [
                "id"=> 599,
                "name"=> "Rail",
                "parent_id"=> 577
            ],
            [
                "id"=> 600,
                "name"=> "Taxi",
                "parent_id"=> 577
            ],
            [
                "id"=> 601,
                "name"=> "Tolls and Fees",
                "parent_id"=> 577
            ],
            [
                "id"=> 602,
                "name"=> "Transportation Centers",
                "parent_id"=> 577
            ]
        ];

        // Insert the sample data into the questions table
        foreach ($category as $categoryData) {
            Category::create($categoryData);
        }
    }
}
