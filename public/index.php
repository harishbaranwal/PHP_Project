<?php
// Start the session
session_start();

// Initialize message and flag variables
$message = "";
$flag = false;

// Process the contact and apply forms
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($requestPath == '/Alpha/public/contact') {
        // Process the contact form
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $address = $_POST['address'] ?? '';
        $phno = $_POST['phno'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $description = $_POST['description'] ?? '';

        // Assuming processing is successful
        $message = "Your message has been sent successfully!";
        $flag = true;

        // Render the contact page
        require __DIR__ . '/../views/contact.php';
        exit;
    } 
}


// Get the requested path and handle routing
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($request) {
    case '/Alpha/public/':
    case '/Alpha/public/index.php':
        require __DIR__ . '/../views/home.php';
        break;
    case '/Alpha/public/about':
        require __DIR__ . '/../views/about.php';
        break;
    case '/Alpha/public/contact':
        require __DIR__ . '/../views/contact.php';
        break;
    case '/Alpha/public/apply':
        require __DIR__ . '/../views/apply.php';
        break;
    


   
        case '/Alpha/public/work/a':
            $data = [
                'title' => 'PREPLAY',
                'description' => 'Realply Industries is a premier natural veneer brand setting a precedent for excellence by manufacturing impressive and elegant natural veneers and plywood, utilizing superior quality raw materials, sourced from across the globe.',
                'service1' => 'Packaging Design',
                'service2' => 'Brand Identity',
                'team1' => ['Aditya', 'Priyanka Singh', 'Ramesh Chandra Singh'],
                'team2' => ['Riya Malhotra', 'Mohan Ram'],
                'details1' => "Despite being a major player in the industry, Realply struggled to differentiate itself from its competitors, leading to a lack of brand distinction and recognition. The company's visual identity and messaging resembled those of its competitors, causing confusion among potential customers and limiting its ability to stand out in the market.",
                'details2' => "Effectively communicate its USP to its target market and develop brand awareness in a way that makes Realply a household name.",
                'details3' => "The first step was to conduct in-depth research to gain a deep understanding of the market, competitors, and the unique strengths of Realply. This research served as the foundation for defining the company's brand positioning, helping them articulate their USP in a compelling way. To create a strong brand presence, ByteTabs implemented a marketing strategy that leveraged digital platforms, industry events, and targeted advertising campaigns. The strategy focused on highlighting Realply's unique offerings, sustainable practices, and the value they bring to their customers.",
            ];
            include __DIR__ . '/../views/work.php';
            break;
        
        case '/Alpha/public/work/b':
            $data = [
                'title' => 'MOTI MAHAL',
                'description' => "Moti Mahal, a culinary gem, is nestled in the vibrant city of Jodhpur, Rajasthan. This renowned restaurant is a testament to the rich culinary heritage of Rajasthan, offering a delightful array of traditional Indian dishes that capture the essence of the region's flavors and spices.",
                'service1' => 'Video Editing',
                'service2' => 'Website Design',
                'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                'team2' => ['Akash Mani', 'Rajkumar'],
                'details1' => "Moti Mahal, a legacy Indian food restaurant, faced challenges in modernizing its brand to stay relevant in a competitive market. Despite its rich history and culinary expertise, Moti Mahal struggled to differentiate itself and connect with a younger, more contemporary audience.",
                'details2' => "The goal was to redesign Moti Mahal's brand identity to reflect its legacy and culinary excellence while appealing to a modern audience.",
                'details3' => "ByteTabs collaborated with Moti Mahal to create a new brand identity that honored its heritage while embracing modernity. The new identity incorporated elements of Indian culture and cuisine in a fresh and contemporary design."
            ];
            include __DIR__ . '/../views/work.php';
            break;
        
        case '/Alpha/public/work/c':
            $data = [
                'title' => 'ASSEMBLY',
                'description' => "Assembly aims to be the go-to travel store when it comes to anything travel-related. Assembly's catalog symbolizes the epitome of functional yet minimal design that is versatile in any part of life, just like you.",
                'service1' => 'Video Editing',
                'service2' => 'Website Design',
                'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                'team2' => ['Akash Mani', 'Rajkumar'],
                'details1' => "Assembly Travel aims to redefine travel by making the experience of traveling memorable & hassle-free.",
                'details2' => "Our goal was to help Assembly identify areas of opportunity that would help in establishing them as an authentic & impactful luggage brand in a competitive market.",
                'details3' => "Our approach was rather simple: Assemble the foundations and core values of a brand that seemed to have lost its way on the journey.",
            ];
            include __DIR__ . '/../views/work.php';
            break;
        
        case '/Alpha/public/work/d':
            $data = [
                'title' => 'RIDO SPORTS',
                'description' => 'Rido Sports is a sports equipment manufacturing brand in India with more than three decades of industry experience.',
                'service1' => 'Video Editing',
                'service2' => 'Website Design',
                'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                'team2' => ['Akash Mani', 'Rajkumar'],
                'details1' => "Rido Sports, despite its legacy and expertise, struggled to establish itself as a leading expert in the sports equipment industry.",
                'details2' => "The primary objective was to revamp Rido Sports' brand image and perception, positioning it as a top-tier provider of quality sports equipment in India.",
                'details3' => "ByteTabs undertook a meticulous process to reinvent Rido Sports, starting with a comprehensive discovery and alignment session.",
            ];
            include __DIR__ . '/../views/work.php';
            break;
        
        case '/Alpha/public/work/e':
            $data = [
                'title' => 'PRRATHAM',
                'description' => 'Pratham, a building project by famously reknowned Devika Builders is a luxurious take on a religious rest stop.',
                'service1' => 'Video Editing',
                'service2' => 'Website Design',
                'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                'team2' => ['Akash Mani', 'Rajkumar'],
                'details1' => "Devika Builders is one of the oldest builders in India with its legacy dating back to 1956.",
                'details2' => "The rest stop aims to attract modern customers while also increasing the footfall of religious pilgrims.",
                'details3' => "Building a brand identity that communicates the kind of premium that the person can feel comfortable with.",
            ];
            include __DIR__ . '/../views/work.php';
            break;
        
        case '/Alpha/public/work/f':
            $data = [
                'title' => 'GRANDEUR INTERIORS',
                'description' => "Grandeur is more than just a design company, with over 50 passionate souls united by a common mission.",
                'service1' => 'Brand Identity',
                'service2' => 'Packaging Design',
                'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                'team2' => ['Akash Mani', 'Rajkumar'],
                'details1' => "Grandeur sought to revamp its website to reflect its commitment to redefining luxury living through exceptional design.",
                'details2' => "The primary goal was to overhaul Grandeur's website to seamlessly translate the essence of their work.",
                'details3' => "ByteTabs worked closely with Grandeur to design a website that captured the essence of their work.",
            ];
            include __DIR__ . '/../views/work.php';
            break;
        
        case '/Alpha/public/work/g':
            $data = [
                'title' => 'NIGHTOWL',
                'description' => 'NightOwl is a sleepwear brand based in Barcelona, Spain.',
                'service1' => 'Video Editing',
                'service2' => 'Website Design',
                'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                'team2' => ['Akash Mani', 'Rajkumar'],
                'details1' => "NightOwl faced challenges in standing out in the competitive garments market.",
                'details2' => "The goal was to rebrand NightOwl to reflect its unique positioning in the market.",
                'details3' => "ByteTabs collaborated with NightOwl to redesign its identity, focusing on storytelling and customer connection.",
            ];
            include __DIR__ . '/../views/work.php';
            break;
        
        case '/Alpha/public/work/h':
            $data = [
                'title' => 'SKIN CO.',
                'description' => 'Skin Co. was introduced under Monsoon Salons aiming to expand their reach and offer something extra to walk-in customers.',
                'service1' => 'Video Editing',
                'service2' => 'Website Design',
                'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                'team2' => ['Akash Mani', 'Rajkumar'],
                'details1' => "Monsoon Hair Salon identified a gap in its product offerings concerning walk-in customers.",
                'details2' => "To establish SkinCo as a luxury brand catering to the needs of affluent consumers.",
                'details3' => "The team decided to finalize the approach that incorporated floral designs to convey nature-inspired luxury.",
            ];
            include __DIR__ . '/../views/work.php';
            break;

            

            case '/Alpha/public/work/i':
                $data = [
                    'title' => '3D NEST',
                    'description' => '3D Nest is a 3D printing service provider based out of New Delhi. The 3D Printing space in India at the lower end is very competitive compared to a handful of experts that work across different technologies. 3D Nest is one such expert service provider. We collaborated with 3D Nest to create a brand for them.',
                    'service1' => 'Video Editing',
                    'service2' => 'Website Design',
                    'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                    'team2' => ['Akash Mani', 'Rajkumar'],
                    'details1' => "3D Nest faced challenges in differentiating itself in the competitive Indian 3D printing market. They struggled to visually communicate their expertise and unique positioning to their target audience, hindering their ability to stand out from the crowd.",
                    'details2' => "The goal was to create a distinctive brand identity for 3D Nest that would effectively convey their expertise in additive manufacturing. They aimed to position themselves as experts in 3D printing technology, setting them apart from the competition. Additionally, they sought to optimize their packaging for 3D printing filaments to reduce costs and improve efficiency.",
                    'details3' => "ByteTabs collaborated with 3D Nest to create a brand identity that reflected the essence of additive manufacturing. The logo design, inspired by the nozzle of a 3D printer, symbolized the process of layer-by-layer material addition. The name '3D Nest' was chosen to evoke the image of a bird building its nest, akin to how 3D printing builds objects layer by layer. For the packaging of their filaments, ByteTabs suggested a cost-effective solution. Instead of printing all the variations of filament colors and sizes on the packaging, they recommended printing only the essential information that would appear on every box. Additional details could be included on a sticker, which would partly cover one side of the package, serving as a seal and making it easier for 3D Nest to identify the required filament color. This approach helped 3D Nest reduce packaging costs while maintaining efficiency in handling different filament variations.",
                ];
                include __DIR__ . '/../views/work.php';
                break;
            
            case '/Alpha/public/work/j':
                $data = [
                    'title' => 'IMS - DIA',
                    'description' => 'After various conceptualized variations including illustrations etc, the team decided to finalize the approach that incorporated floral designs to convey nature-inspired luxury and sophistication. The color of the packaging emphasizes aspirational indulgence, appealing to affluent consumers in Tier 2 and Tier 3 cities in India.',
                    'service1' => 'Video Editing',
                    'service2' => 'Website Design',
                    'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                    'team2' => ['Akash Mani', 'Rajkumar'],
                    'details1' => "Established in 2005 and part of the Unison world group, IMS Design School always set itself as the innovator. However, due to challenges with board and course certifications, they were never able to establish a name for themselves.",
                    'details2' => "Position IMS as innovators at a Global level.",
                    'details3' => "The goal was to ignite passion & impart the knowledge & experience required to become world-class creators. The rebranding for IMS Design School was a playful, colorful yet minimal approach aligning perfectly with DIA’s tagline ‘Dream, Dare, Design’",
                ];
                include __DIR__ . '/../views/work.php';
                break;
            
            case '/Alpha/public/work/k':
                $data = [
                    'title' => 'KAFIN',
                    'description' => 'A cafe that resonates with the bright and lively street culture of Hong Kong, a chill hangout place in the heart of the city with their ambiance bringing a modern Western twist while staying true to their Cantonese roots.',
                    'service1' => 'Video Editing',
                    'service2' => 'Website Design',
                    'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                    'team2' => ['Akash Mani', 'Rajkumar'],
                    'details1' => "In the bustling metropolis of Hong Kong, there is a lack of cafes that fully capture the essence of the city's dynamic and vibrant street culture, while also resonating with the growing demand for artisanal coffee. The challenge is to create a brand that blends the allure of modern coffee with lively street art and neon colors that paint the city with life while remaining rooted in the traditional Cantonese culture.",
                    'details2' => "Establish a captivating modern cafe brand rooted in Cantonese culture and street art, resonating with coffee enthusiasts.",
                    'details3' => "Create a brand that represents an urban fusion of Hong Kong's vibrant street culture and the evolving artisanal coffee scene. The goal is to curate a captivating experience that seamlessly blends modern coffee artistry with the rich heritage of Cantonese culture. The visual identity of Kafin would showcase a mix of Cantonese-inspired design elements, drawing inspiration from street art and neon lights while incorporating traditional Cantonese motifs. The logo would be a play on the script.",
                ];
                include __DIR__ . '/../views/work.php';
                break;
            
            case '/Alpha/public/work/l':
                $data = [
                    'title' => 'THE SELF CENTER',
                    'description' => 'A holistic life coaching, mindfulness, and wellness studio based in Gurgaon with a need to bring awareness about self care to as many people as they can with a goal to help people reach their ultimate potential.',
                    'service1' => 'Video Editing',
                    'service2' => 'Website Design',
                    'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                    'team2' => ['Akash Mani', 'Rajkumar'],
                    'details1' => "The Self Center, a holistic life coaching page targeting a slightly premium audience, faced the challenge of carving a unique space in the competitive life coaching industry. While there is a growing demand for life coaching services, the market is saturated with numerous providers offering similar services. The Self Center needed to differentiate itself and establish a distinctive identity that would resonate with its target audience.",
                    'details2' => "Clearly communicate the uniqueness of their approach and the value they bring to their clients as a one-of-a-kind life coaching platform.",
                    'details3' => "Impart information that our audience might often get wrong amidst all the confusion regarding mental health and self-care in the modern world. Positioning ourselves as a one-of-a-kind holistic wellness center with flexible schedules and a supportive community was our top priority to meet the challenges faced by The Self Center.",
                ];
                include __DIR__ . '/../views/work.php';
                break;
            
                case '/Alpha/public/work/m':
                    $data = [
                        'title' => 'Shimona',
                        'description' => 'A holistic life coaching, mindfulness, and wellness studio based in Gurgaon with a need to bring awareness about self care to as many people as they can with a goal to help people reach their ultimate potential.',
                        'service1' => 'Video Editing',
                        'service2' => 'Website Design',
                        'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                        'team2' => ['Akash Mani', 'Rajkumar'],
                        'details1' => "The Self Center, a holistic life coaching page targeting a slightly premium audience, faced the challenge of carving a unique space in the competitive life coaching industry. While there is a growing demand for life coaching services, the market is saturated with numerous providers offering similar services. The Self Center needed to differentiate itself and establish a distinctive identity that would resonate with its target audience.",
                        'details2' => "Clearly communicate the uniqueness of their approach and the value they bring to their clients as a one-of-a-kind life coaching platform.",
                        'details3' => "Impart information that our audience might often get wrong amidst all the confusion regarding mental health and self-care in the modern world. Positioning ourselves as a one-of-a-kind holistic wellness center with flexible schedules and a supportive community was our top priority to meet the challenges faced by The Self Center.",
                    ];
                    include __DIR__ . '/../views/work.php';
                    break;
                
                case '/Alpha/public/work/n':
                    $data = [
                        'title' => 'AIRE',
                        'description' => 'A handmade agriculture-based brand, with their primary shelf consisting of pickles and chutneys as a celebration for recipes that have been passed down for generations.',
                        'service1' => 'Video Editing',
                        'service2' => 'Website Design',
                        'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                        'team2' => ['Akash Mani', 'Rajkumar'],
                        'details1' => "Cordet, a subdivision of IFFCO was hoping to find a market for its new handmade agriculture-based products. The goal was 2 fold, on one hand, they wanted to uplift and empower women in the rural sector, on the other they wanted to preserve the old forgotten recipes of India.",
                        'details2' => "Making sure the brand they launch is successful in the metros with a modern touch to old forgotten recipes.",
                        'details3' => "Highlighting the journey from rural kitchens to urban shelves, giving the brand a sense of warmth and authenticity. They wanted to draw upon the core concept of the idea behind Cordet’s launch which was the idea of keeping ‘Food Art Alive’ and make sure that the narratives regarding food heritage are not lost.",
                    ];
                    include __DIR__ . '/../views/work.php';
                    break;
                
                case '/Alpha/public/work/o':
                    $data = [
                        'title' => 'GEN KIDS',
                        'description' => 'An early childhood development company specializing in online classes for children, incorporating play-based learning into their curriculum.',
                        'service1' => 'Video Editing',
                        'service2' => 'Website Design',
                        'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                        'team2' => ['Akash Mani', 'Rajkumar'],
                        'details1' => "GEN KIDS aimed to bridge the gap in early childhood education, providing accessible online classes that foster holistic development for children. They sought to incorporate play-based learning to engage children and promote creativity and critical thinking.",
                        'details2' => "Position GEN KIDS as a leader in online early childhood education, offering a unique blend of fun and learning.",
                        'details3' => "By creating a visually engaging and playful brand identity, GEN KIDS aimed to attract parents looking for innovative educational solutions for their children. The focus was on establishing a sense of community and support for parents and children in the online learning space.",
                    ];
                    include __DIR__ . '/../views/work.php';
                    break;
                
                case '/Alpha/public/work/p':
                    $data = [
                        'title' => 'GenLifters',
                        'description' => 'A fitness consultancy service aimed at promoting a healthy lifestyle through personalized training programs and nutritional guidance.',
                        'service1' => 'Video Editing',
                        'service2' => 'Website Design',
                        'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                        'team2' => ['Akash Mani', 'Rajkumar'],
                        'details1' => "GenLifters focused on revolutionizing fitness consultancy by offering personalized training programs tailored to individual goals. They faced challenges in establishing a brand that resonated with a diverse audience looking for fitness solutions.",
                        'details2' => "Create a brand that embodies the spirit of transformation and empowerment in the fitness journey.",
                        'details3' => "The branding strategy emphasized the importance of community, motivation, and support in achieving fitness goals. By integrating testimonials and success stories into their brand narrative, GenLifters aimed to foster a sense of belonging among their clients.",
                    ];
                    include __DIR__ . '/../views/work.php';
                    break;
           


                    case '/Alpha/public/work/o':
                        $data = [
                            'title' => 'Begam',
                            'description' => 'A holistic life coaching, mindfulness, and wellness studio based in Gurgaon with a need to bring awareness about self care to as many people as they can with a goal to help people reach their ultimate potential.',
                            'service1' => 'Video Editing',
                            'service2' => 'Website Design',
                            'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                            'team2' => ['Akash Mani', 'Rajkumar'],
                            'details1' => "The Self Center, a holistic life coaching page targeting a slightly premium audience, faced the challenge of carving a unique space in the competitive life coaching industry. While there is a growing demand for life coaching services, the market is saturated with numerous providers offering similar services. The Self Center needed to differentiate itself and establish a distinctive identity that would resonate with its target audience.",
                            'details2' => "Clearly communicate the uniqueness of their approach and the value they bring to their clients as a one-of-a-kind life coaching platform.",
                            'details3' => "",
                        ];
                        include __DIR__ . '/../views/work.php';
                        break;
                    
                    case '/Alpha/public/work/p':
                        $data = [
                            'title' => 'THREE KINGS',
                            'description' => 'It’s no secret that the hype culture in India is on the rise, and with hype culture, comes a sneakerhead community that is truly, madly dedicated to this one thing they love to wear, protect and collect: Sneakers. Three Kings, a platform with a dedicated team of individuals with love and passion for sneakers, aims to spread and infuse this culture into every street of India.',
                            'service1' => 'Video Editing',
                            'service2' => 'Website Design',
                            'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                            'team2' => ['Akash Mani', 'Rajkumar'],
                            'details1' => "In a crowded market, where a lot of huge players are already doing phenomenal business, the main challenge for Three Kings was to stand out. Being a new brand, it was essential for them to reach the right audience at the right time to be able to compete with established brands by leveraging social media to their advantage while staying true to their core passion.",
                            'details2' => "Our objective was to elevate Three Kings brand presence on social media platforms, cultivate a loyal community of sneaker enthusiasts, and position the brand as the go-to destination for exclusive sneaker releases in India.",
                            'details3' => "A market where it’s all about selling and reselling, offers and drops, a true weapon in our favour was truly leveraging the love and passion for the culture. With our social media posts, we aimed to give every sneaker an identity of their own, while keeping a holistic language for the entire brand.",
                        ];
                        include __DIR__ . '/../views/work.php';
                        break;
                    
                    case '/Alpha/public/work/q':
                        $data = [
                            'title' => 'LOST RECIPIES',
                            'description' => 'A handmade agriculture-based brand, with their primary shelf consisting of pickles and chutneys as a celebration for recipes that have been passed down for generations.',
                            'service1' => 'Video Editing',
                            'service2' => 'Website Design',
                            'team1' => ['Aman', 'Riya Singh', 'Mahesh Pratap'],
                            'team2' => ['Akash Mani', 'Rajkumar'],
                            'details1' => "Cordet, a subdivision of IFFCO was hoping to find a market for its new handmade agriculture-based products. The goal was 2 fold, on one hand, they wanted to uplift and empower women in the rural sector, on the other they wanted to preserve the old forgotten recipes of India.",
                            'details2' => "Making sure the brand they launch is successful in the metros with a modern touch to old forgotten recipes.",
                            'details3' => "Highlighting the journey from rural kitchens to urban shelves, the branding celebrated the diverse flavors and traditions that encompassed Indian cuisine. The packaging design played a crucial role in capturing the essence of 'Lost Recipes.' Using traditional patterns and illustrations inspired by Indian folk art, attracting the attention of consumers seeking unique and culturally enriched products. The use of earthy and natural tones reflected the handmade nature of the products and their agricultural origins.",
                        ];
                        include __DIR__ . '/../views/work.php';
                        break;
                    
                    case '/Alpha/public/work/r':
                        $data = [
                            'title' => 'GREEN GRATITUDE',
                            'description' => 'An ecommerce platform, with sustainable and earth-friendly products offered on the platform. Currently, in their awareness phase on Instagram, Green Gratitude strives to bring a change by spreading education about sustainability unlike any other platform.',
                            'service1' => 'Video Editing',
                            'service2' => 'Website Design',
                            'team1' => ['Yatin Savlani', 'Riya Singh', 'Harsh Gupta'],
                            'team2' => ['Akash Mani', 'Rajkumar'],
                            'details1' => "Green Gratitude, a sustainable e-commerce platform, faces the challenge of establishing its presence and gaining recognition in a competitive market. As a brand that is yet to release its products, it needs to find a way to engage with its target audience and build anticipation for its sustainable platform.",
                            'details2' => "Creating a marketing strategy that not only generates buzz around the upcoming launch but also resonates with potential customers, highlighting the brand's values and mission.",
                            'details3' => "Instagram's visual nature provides an opportunity to showcase the eco-friendly materials and practices used in the products. Another effective approach was to collaborate with eco-conscious brands that align with Green Gratitude's values to capture the attention of sustainable brands in the market as a way of teasing the e-commerce platform. To educate and inspire followers, we also created informative content on sustainable living, eco-friendly tips, and the importance of making conscious choices in everyday life.",
                        ];
                        include __DIR__ . '/../views/work.php';
                        break;
           




    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
?>
