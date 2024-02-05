<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation de l'inscription</title>
    <style>
        body {
            background-image: url(../images/error.jpeg);
            padding: 15% 20%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card {
            color: #007FFF;
            position: relative;
            text-align: left;
            border-radius: 0.5rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            background-color: #fff;
        }

        .dismiss {
            position: absolute;
            right: 10px;
            top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            background-color: #fff;
            color: black;
            border: 2px solid #D1D5DB;
            font-size: 1rem;
            font-weight: 300;
            width: 30px;
            height: 30px;
            border-radius: 7px;
            transition: .3s ease;
        }

        .dismiss:hover {
            background-color: #ee0d0d;
            border: 2px solid #ee0d0d;
            color: #fff;
        }

        .header {
            padding: 1.25rem 1rem 1rem 1rem;
        }

        .image {
            display: flex;
            margin-left: auto;
            margin-right: auto;
            background-color: red;
            flex-shrink: 0;
            justify-content: center;
            align-items: center;
            width: 3rem;
            height: 3rem;
            border-radius: 9999px;
            animation: animate .6s linear alternate-reverse infinite;
            transition: .6s ease;
        }

        .image  {
            color: #fff;
            width: 2rem;
            height: 2rem;
        }

        .content {
            margin-top: 0.75rem;
            text-align: center;
            text-decoration: none;
        }

        .title {
            color: red;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5rem;
            text-transform: uppercase;
        }

        .message {
            margin-top: 0.5rem;
            color: black;
            font-size: 1.2rem;
            line-height: 1.25rem;
        }

        .actions {
            margin: 0.75rem 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .history {
            display: inline-flex;
            padding: 0.5rem 1rem;
            background-color: #1aa06d;
            color: #ffffff;
            font-size: 1.2rem;
            line-height: 1.5rem;
            font-weight: 500;
            justify-content: center;
            width: 10vw;
            border-radius: 0.375rem;
            border: none;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            text-decoration: none;
        }

        .track {
            display: inline-flex;
            margin-top: 0.75rem;
            padding: 0.5rem 1rem;
            color: #fff;
            font-size: 1.2rem;
            line-height: 1.5rem;
            font-weight: 500;
            justify-content: center;
            width: 10vw;
            border-radius: 0.375rem;
            border: 1px solid #D1D5DB;
            background-color: red;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            text-decoration: none;
        }

        @keyframes animate {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.09);
            }
        }
    </style>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="card">
        <button class="dismiss" type="button">×</button>
        <div class="header">
            <div class="image">
                <!-- <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> -->X
            </div>
            <div class="content">
                <span class="title">Votre candidature ne peut être acceptée</span>
                <p class="message">Nous sommes dans le regret de vous annoncer que votre candidature ne peut être retenue car votre Bac2 est vieux de plus de deux(02) ans</p>
            </div>
            <div class="actions">
                <a class="track" href="pageAccAbsolute.php">D'accord</a>
            </div>
        </div>
    </div>
</body>

</html>