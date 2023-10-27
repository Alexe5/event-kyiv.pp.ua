<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" aria-label="Ajax logo" viewBox="0 0 96 20" height="3em" fill="currentColor" class="mw-100 header-ajax-logo_logo__j4OWh"><path d="M74.69.88h-5.3l21.25 19.11h5.3L74.69.88m6.14 13.6-6.13 5.51h-5.3l6.12-5.51h5.31m8.99-8.09L95.95.88h-5.3l-6.13 5.51h5.3M13.28.88l-2.17 3.11 11.07 16h4.38L13.28.88M7.66 8.97H12L4.38 19.99H0L7.66 8.97M53.24.88l-2.17 3.11 11.07 16h4.38L53.24.88m-5.62 8.09h4.34l-7.62 11.02h-4.38l7.66-11.02M35.23.88l.01 11.7c-.01 1.9-.9 4.27-3.89 4.47h-1.09v2.94l1.57.01a7.01 7.01 0 0 0 4.81-2.06 8.11 8.11 0 0 0 2.03-5.55V.88h-3.44"></path></svg>
    </div>
    <h1 class="title">Release Party</h1>
    <main>
        <div class="img__wrap">
            <div class="close">
                <div class="close__item"></div>
                <div class="close__item"></div>
            </div>
            <img src="images/hole.webp" alt="Схема Зала" class="holl__img" loading="lazy">
        </div>
        <div class="img__wrap1">
            <div class="close">
                <div class="close__item"></div>
                <div class="close__item"></div>
            </div>
            <img src="images/wc.jpg" alt="Схема Зала" class="holl__img" loading="lazy">
        </div>
        <button class="registration__btn">реєстрація</button>
        <form class="form" novalidate>
        <label for="form__field" class="form__label">
            Вкажіть свій рабочий email
            <input type="email" name="email" class="form__field" id="form__field" placeholder="email">
            <span class="form__error"> Помилковий email</span>
        </label>
            <button type="submit" class="form__btn">зареєструватися</button>
        </form>
        <button class="schedule__btn" onclick="window.location.href='#schedule-list'">розклад</button>
        <button class="hole__btn">схема залу</button>
        <button class="wc__btn">wc</button> 
    </main>
    <section class="schedule"> 
        <h2 class="title" id="schedule-list">розклад</h2>
        <div class="schedule__items">
            <div class="schedule__item">
                <span class="schedule__time">10:00 - 12:00</span>
                <h4 class="schedule__name">Registration & Small talk time</h4>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">12:00 - 12:30</span>
                <h4 class="schedule__name">Intro AK</h4>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">12:30 - 13:10</span>
                <h4 class="schedule__name">Melnyk M. Suslov P. Gavrilov A.</h4>
                <span class="schedule__them">Тема: Device block.</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">13:10 - 13:30</span>
                <h4 class="schedule__name">Kupchenko B.</h4>
                <span class="schedule__them">Тема: Fibra block</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">13:30 - 13:50</span>
                <h4 class="schedule__name">Stanislavskyi G.</h4>
                <span class="schedule__them">Тема: Fire block</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">13:50 - 14:10</span>
                <h4 class="schedule__name">Pentsak T.</h4>
                <span class="schedule__them">Тема: BA block.</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">14:10 - 14:30</span>
                <h4 class="schedule__name">Coffee break.</h4>
                <span class="schedule__them"></span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">14:30 - 15:00</span>
                <h4 class="schedule__name">Kiyashko O. Horban M.</h4>
                <span class="schedule__them">Тема: Video block.</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">15:00 - 15:20</span>
                <h4 class="schedule__name">Guda A.</h4>
                <span class="schedule__them">Тема: PM/Portfolio block.</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">15:20 - 16:20</span>
                <h4 class="schedule__name">Berezianskyi O. Surovsky Y. Kaminskyi O. Sahan V.</h4>
                <span class="schedule__them">Тема: System block</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">16:20 - 16:40</span>
                <h4 class="schedule__name">Steblyk V.</h4>
                <span class="schedule__them">Тема: QA block</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">16:40 - 17:00</span>
                <h4 class="schedule__name">Oleinyk A.</h4>
                <span class="schedule__them">Automation block</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">17:00 - 17:20</span>
                <h4 class="schedule__name">Coffee break.</h4>
                <span class="schedule__them"></span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">17:20 - 17:40</span>
                <h4 class="schedule__name">Demchyshyn B.</h4>
                <span class="schedule__them">Тема: Production block</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">17:40 - 18:00</span>
                <h4 class="schedule__name">Astron O.</h4>
                <span class="schedule__them">Тема: Product design block</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">18:00 - 18:20</span>
                <h4 class="schedule__name">Hrytsenko V.</h4>
                <span class="schedule__them">Тема: Marketing block.</span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">18:20 - 19:30</span>
                <h4 class="schedule__name"> Dinner & Talks</h4>
                <span class="schedule__them"></span>
            </div>
            <div class="schedule__item">
                <span class="schedule__time">19:30 - 23:00</span>
                <h4 class="schedule__name">Chill time with colleagues</h4>
                <span class="schedule__them"></span>
            </div>
        </div>
    </section>
    <div class="popup">
        <div class="popup__wrapper"></div>
        <div class="popup__window">
            <div class="popup__close"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none"><rect width="32" height="2" x="14.414" y="13" fill="#fff" rx="1" transform="rotate(45 14.414 13)"></rect><rect width="32" height="2" x="13.414" y="36" fill="#fff" rx="1" transform="rotate(-45 13.414 36)"></rect></svg></div>
            <div class="popup__symbol popup__symbol_check">&check;</div>
            <div class="popup__symbol popup__symbol_cross">&cross;</div>
            <p class="popup__text popup__text_success">Дякуємо за реєстрацію!</p>
            <p class="popup__text popup__text_failure">Зверніться до адміністратора</p>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>