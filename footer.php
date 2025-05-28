<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VEC Footer Component</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f9fbfc;
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .vec-footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 2rem 2rem;
            text-align: center;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.15);
            margin-top: auto;
        }

        .vec-footer .footer-content {
            max-width: 960px;
            margin: 0 auto;
        }

        .vec-footer .footer-text {
            font-weight: 400;
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #bdc3c7;
        }

        .vec-footer .footer-links {
            margin-bottom: 1rem;
        }

        .vec-footer .footer-links a {
            color: #1abc9c;
            text-decoration: none;
            margin: 0 1rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .vec-footer .footer-links a:hover,
        .vec-footer .footer-links a:focus {
            color: #16a085;
            outline: none;
        }

        .vec-footer .social-links a {
            color: #1abc9c;
            margin: 0 0.8rem;
            font-size: 1.4rem;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .vec-footer .social-links a:hover,
        .vec-footer .social-links a:focus {
            color: #16a085;
            outline: none;
        }

        .social-links a {
            margin: 0 10px;
            font-size: 24px;
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #0077b5;
            /* LinkedIn blue for example */
        }


        @media (max-width: 480px) {

            .vec-footer .footer-links a,
            .vec-footer .social-links a {
                margin: 0 0.5rem;
                font-size: 1rem;
            }
        }
    </style>
</head> 

<body>

    <footer class="vec-footer" role="contentinfo" aria-label="VEC module footer">
        <div class="footer-content">
            <p class="footer-text">© 2024 Veena Group. All Rights Reserved.</p>
            <p class="footer-text">Empowering Mumbai’s Real Estate Market through Smart Digital Solutions.</p>
            <nav class="footer-links" aria-label="Footer navigation links">
                <a href="#" tabindex="0">Privacy Policy</a>
                <a href="#" tabindex="0">Terms of Service</a>
                <a href="#" tabindex="0">Contact Us</a>
            </nav>
            <div class="social-links" aria-label="Social media links">
                <a href="#" tabindex="0" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" tabindex="0" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" tabindex="0" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>

        </div>
    </footer>

</body>

</html>