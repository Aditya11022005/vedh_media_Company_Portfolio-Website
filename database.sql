
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE banners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    button_text VARCHAR(100) NOT NULL,
    button_link VARCHAR(255) NOT NULL
);

CREATE TABLE features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE statistics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(50),
    count INT,
    title VARCHAR(100),
    description VARCHAR(255)
);

CREATE TABLE about (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    p1 TEXT NOT NULL,
    p2 TEXT NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE about_ul_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    about_id INT,
    list_item TEXT NOT NULL,
    FOREIGN KEY (about_id) REFERENCES about(id)
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    icon VARCHAR(50) NOT NULL
);

CREATE TABLE bioServices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    h2 VARCHAR(255) NOT NULL,
    p1 TEXT NOT NULL,
    image VARCHAR(255),
    h3 TEXT NOT NULL,
    p2 TEXT NOT NULL
);

CREATE TABLE ourServices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(255) NOT NULL,
    skill_level INT NOT NULL
);

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    twitter VARCHAR(255),
    facebook VARCHAR(255),
    instagram VARCHAR(255),
    linkedin VARCHAR(255)
);

CREATE TABLE contact_box (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    value VARCHAR(255),
    icon VARCHAR(255)
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('no_checked', 'checked') DEFAULT 'no_checked',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    product_name VARCHAR(255) NOT NULL,
    description TEXT,
    price VARCHAR(255) NOT NULL,
    FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE
);

CREATE TABLE product_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    image_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

-- ==============================  
-- 📥 DATA INSERTION (COMPLETE)  
-- ==============================  
-- DEFAULT PASSWORD: "IQBOLSHOH" (HASHED FOR SECURITY)  
-- ==============================  

INSERT INTO
    users (name, username, password)
VALUES
    (
        'Iqbolshoh',
        'Iqbolshoh',
        '52be5ff91284c65bac56f280df55f797a5c505f7ef66317ff358e34791507027'
    );

INSERT INTO
    about (title, p1, p2, image)
VALUES
    (
        'Our Services',
        'Our team always strives to achieve the best results. We continue to improve our skills and provide the most effective solutions for our clients.',
        'Building long-term and trustworthy partnerships with our clients is our main goal.',
        'assets/img/about.jpg'
    );

INSERT INTO
    about_ul_items (about_id, list_item)
VALUES
    (
        1,
        'We provide quality service to our clients and aim to meet their needs.'
    ),
    (
        1,
        'We develop innovative solutions and apply modern technologies.'
    ),
    (
        1,
        'We approach each project individually and offer new solutions.'
    ),
    (
        1,
        'Our experienced professionals assist with any issues.'
    ),
    (
        1,
        'Our support service is always open for our clients.'
    ),
    (
        1,
        'We improve service quality through innovative approaches.'
    ),
    (
        1,
        'We create special strategies for each project.'
    ),
    (
        1,
        'We help our clients unlock new opportunities.'
    );

INSERT INTO
    banners (
        image,
        title,
        description,
        button_text,
        button_link
    )
VALUES
    (
        'hero-carousel-1.jpg',
        'Welcome to Iqbolshoh',
        'Modern Web-Sites Creation',
        'Start',
        'about.php'
    ),
    (
        'hero-carousel-2.jpg',
        'Change Your Life with Us',
        'Grow yourself with new ideas and creative solutions.',
        'Start',
        'about.php'
    ),
    (
        'hero-carousel-3.jpg',
        'Our Offers',
        'We offer the best services for you.',
        'Start',
        'about.php'
    );

INSERT INTO
    bioServices (h2, p1, image, h3, p2)
VALUES
    (
        'Our Services',
        'Our experience and skills help us to deliver the best products to you.',
        'skills.jpg',
        'Our Product Development Skills',
        'We use modern technologies to create our products.'
    );

INSERT INTO
    category (category_name)
VALUES
    ('App'),
    ('Product'),
    ('Branding'),
    ('Book');

INSERT INTO
    contact (twitter, facebook, instagram, linkedin)
VALUES
    (
        'iqbolshoh_777',
        '',
        'iqbolshoh_777',
        'iiqbolshoh'
    );

INSERT INTO
    contact_box (title, value, icon)
VALUES
    ('Address', 'Samarkand City', 'bi bi-geo-alt'),
    (
        'Contact Us',
        '+998 99 779 93 33',
        'bi bi-telephone'
    ),
    (
        'Send Us an Email',
        'iilhomjonov777@gmail.com',
        'bi bi-envelope'
    );

INSERT INTO
    features (icon, title, description)
VALUES
    (
        'bi bi-bounding-box-circles',
        'Innovative Solutions',
        'Our innovative solutions can change your life.'
    ),
    (
        'bi bi-calendar4-week',
        'Free Consultations',
        'Get free advice from our experts and grow.'
    ),
    (
        'bi bi-broadcast',
        'Strong Network',
        'Gain access to numerous opportunities through our network.'
    );

INSERT INTO
    ourServices (service_name, skill_level)
VALUES
    ('Web Development', 90),
    ('Mobile Development', 85),
    ('Cybersecurity', 80),
    ('Database', 95),
    ('UI/UX Design', 75);

INSERT INTO
    products (category_id, product_name, description, price)
VALUES
    (
        1,
        'App 1',
        'Lorem ipsum, dolor sit amet consectetur',
        '300'
    ),
    (
        2,
        'Product 1',
        'Lorem ipsum, dolor sit amet consectetur',
        '400'
    ),
    (
        3,
        'Branding 1',
        'Lorem ipsum, dolor sit amet consectetur',
        '500'
    ),
    (
        4,
        'Books 1',
        'Lorem ipsum, dolor sit amet consectetur',
        '600'
    ),
    (
        1,
        'App 2',
        'Lorem ipsum, dolor sit amet consectetur',
        '350'
    ),
    (
        2,
        'Product 2',
        'Lorem ipsum, dolor sit amet consectetur',
        '450'
    ),
    (
        3,
        'Branding 2',
        'Lorem ipsum, dolor sit amet consectetur',
        '550'
    ),
    (
        4,
        'Books 2',
        'Lorem ipsum, dolor sit amet consectetur',
        '650'
    ),
    (
        1,
        'App 3',
        'Lorem ipsum, dolor sit amet consectetur',
        '370'
    ),
    (
        2,
        'Product 3',
        'Lorem ipsum, dolor sit amet consectetur',
        '470'
    ),
    (
        3,
        'Branding 3',
        'Lorem ipsum, dolor sit amet consectetur',
        '570'
    ),
    (
        4,
        'Books 3',
        'Lorem ipsum, dolor sit amet consectetur',
        '670'
    );

INSERT INTO
    product_images (product_id, image_url)
VALUES
    (1, 'app-1.jpg'),
    (2, 'product-1.jpg'),
    (3, 'branding-1.jpg'),
    (4, 'books-1.jpg'),
    (5, 'app-2.jpg'),
    (6, 'product-2.jpg'),
    (7, 'branding-2.jpg'),
    (8, 'books-2.jpg'),
    (9, 'app-3.jpg'),
    (10, 'product-3.jpg'),
    (11, 'branding-3.jpg'),
    (12, 'books-3.jpg'),
    (1, 'app-1.jpg'),
    (1, 'product-1.jpg'),
    (1, 'branding-1.jpg');

INSERT INTO
    services (title, description, icon)
VALUES
    (
        'Our Services',
        'We provide tailored solutions for each client. Discover our reliable and effective services.',
        'bi-activity'
    ),
    (
        'Customized Solutions',
        'Our services are designed to meet each client’s needs. We provide the best solution for you.',
        'bi-broadcast'
    ),
    (
        'Innovative Approaches',
        'We solve your problems with innovative approaches. Every service offers creative solutions.',
        'bi-easel'
    ),
    (
        'Fast and Efficient Services',
        'Our services are fast and efficient, with a strong focus on quality. Your needs come first.',
        'bi-bounding-box-circles'
    ),
    (
        'Expert Advice',
        'Our experts are ready to provide the best advice. Feel free to reach out with any questions or concerns.',
        'bi-calendar4-week'
    ),
    (
        'Client Communication',
        'We maintain open and friendly communication with clients. Your feedback and suggestions are very important to us.',
        'bi-chat-square-text'
    );

INSERT INTO
    statistics (icon, count, title, description)
VALUES
    (
        'bi bi-emoji-smile',
        232,
        'Happy Clients',
        'our success'
    ),
    (
        'bi bi-journal-richtext',
        521,
        'Projects',
        'our creativity'
    ),
    (
        'bi bi-headset',
        1453,
        'Support Hours',
        'we are always there for clients'
    ),
    (
        'bi bi-people',
        32,
        'Workers',
        'our team'
    );

INSERT INTO
    messages (name, email, subject, message, status)
VALUES
    (
        'Aliya Karimova',
        'aliya.karimova@example.com',
        'New Project',
        'Hello Iqbolshoh, I am very interested in collaborating with you on a new project. Please let me know if we can discuss the details.',
        'no_checked'
    ),
    (
        'Shodmon Abdurahimov',
        'shodmon.abdurahimov@example.com',
        'Code Review Request',
        'Hi Iqbolshoh, could you review my recent code and give feedback? I trust your insights will help me improve!',
        'no_checked'
    ),
    (
        'Kamola Ergasheva',
        'kamola.ergasheva@example.com',
        'Platform Assistance',
        'Dear Iqbolshoh, I need some guidance with navigating your platform. Can you assist me with the features?',
        'no_checked'
    ),
    (
        'Farhod Yusupov',
        'farhod.yusupov@example.com',
        'Partnership Inquiry',
        'Greetings Iqbolshoh, I am reaching out to explore a potential partnership between our teams. I believe we have mutual goals that can benefit us both. Looking forward to your response.',
        'no_checked'
    );
