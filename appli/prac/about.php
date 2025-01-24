<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Design/About.css">
</head>
<body>
    <style>
    .about {
    padding: 4rem 0;
    background-color: #eaeff2;
    overflow: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.about h2 {
    font-size: 2.5rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 4rem;
    opacity: 0;
    transform: translateX(-100%);
    transition: opacity 3s ease, transform 2s ease;
}

.about h2.slide-in {
    opacity: 1;
    transform: translateX(0);
}

.row {
    display: flex;
    align-items: center;
    gap: 2rem;
    margin-bottom: 4rem;
    opacity: 0;
    transition: opacity 0.8s ease;
}

.row.slide-in {
    opacity: 1;
}

.row:last-child {
    margin-bottom: 0;
}

.row.reverse {
    flex-direction: row-reverse;
}

.content {
    flex: 1;
    transform: translateX(-50%);
    opacity: 0;
    transition: transform 2s ease, opacity 3s ease;
}

.row.slide-in .content {
    transform: translateX(0);
    opacity: 1;
}

.image-container {
    flex: 1;
    transform: translateX(50%);
    opacity: 0;
    transition: transform 2s ease, opacity 3s ease;
}

.row.slide-in .image-container {
    transform: translateX(0);
    opacity: 1;
}

.content h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.content p {
    color: #020105;
    line-height: 1.7;
}

.image-container img {
    width: 80%;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.image-container img:hover {
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .row, .row.reverse {
        flex-direction: column;
    }

    .content, .image-container {
        width: 100%;
    }
}
    </style>
<section class="about" id="about">
    <div class="container">
        <h2>About Us</h2>

        <!-- Row 1 -->
        <div class="row">
            <div class="content">
                <h3>Fernando Benavente</h3>
                <p>Fernando Benavente, based in Hawaii, United States, is currently a Manager at The Benavente Group LLC. 
                    Fernando Benavente brings experience from previous roles at CBRE, Appraisal Institute, The Hallstrom Group, Inc.
                    and Title Guaranty, Guam. Fernando Benavente holds a Master of Business Administration (MBA) in Finance @ Hawaii Pacific University. 
                    Fernando Benavente has 1 emails on RocketReach.</p>
            </div>
            <div class="image-container">
                <img src="images/logo3.jpg" alt="Vision">
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row reverse">
            <div class="content">
                <p>The Benavente Group is a team of professionals specializing in real estate economics, valuation, and market analysis.  
                    We make it our business to understand the dynamics of market movements, 
                    motivations of buyers and sellers, and the specific needs of our clients.</p>
            </div>
            <div class="image-container">
                <img src="images/1.webp" alt="Mission">
            </div>
        </div>

        <!-- Row 3 -->
        <div class="row">
            <div class="content">
                <h3>Our Values</h3>
                <p>The Benavente Group, we leverage over 50 years of combined experience to deliver exceptional real estate appraisal and consulting services. 
                    Our team of highly skilled professionals possesses the expertise and technical acumen to 
                    provide credible and insightful solutions for a diverse range of real estate challenges.</p>
            </div>
            <div class="image-container">
                <img src="images/2.webp" alt="Values">
            </div>
        </div>

</section>
<script src="js/about.js"></script>
</body>
</html>