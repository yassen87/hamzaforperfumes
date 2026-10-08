<?php
// إعدادات المتجر
$store_name     = "حمزه للعطور";
$store_tagline  = "نفحات من الفخامة والأناقة تُنسج خصيصاً لأجلك";
$logo_url       = "https://i.ibb.co/tTTWFSy5/IMG-20261008-WA0027-edit-119221783981967.jpg";

// بيانات التواصل (عدّلها بما يناسبك)
$phone_number   = "+201000000000"; 
$whatsapp_phone = "201000000000"; // الرقم بصيغة دولية بدون +
$instagram_user = "hamza_perfumes";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $store_name; ?> | الموقع تحت الإنشاء</title>
    
    <!-- خط تجوال وخط أميري الملكي من Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    
    <!-- أيقونات FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --gold-primary: #d4af37;
            --gold-light: #fbeea7;
            --gold-dark: #9a781d;
            --bg-black: #0c0c0e;
            --card-bg: rgba(20, 20, 26, 0.78);
            --text-muted: #b5b5c2;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background-color: var(--bg-black);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            position: relative;
            padding: 20px;
            overflow-x: hidden;
        }

        /* توهج ضوئي ذهبي في الخلفية */
        .ambient-glow {
            position: fixed;
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.16) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
            filter: blur(75px);
            animation: pulse-glow 7s ease-in-out infinite alternate;
        }

        @keyframes pulse-glow {
            0% { transform: translate(-50%, -50%) scale(0.9); opacity: 0.6; }
            100% { transform: translate(-50%, -50%) scale(1.15); opacity: 1; }
        }

        /* حاوية البطاقة الزجاجية */
        .coming-soon-card {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 660px;
            background: var(--card-bg);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(212, 175, 55, 0.28);
            border-radius: 30px;
            padding: 50px 35px 35px 35px;
            text-align: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.7), 0 0 25px rgba(212, 175, 55, 0.08);
        }

        /* إطار اللوجو الأنيق */
        .logo-container {
            margin-bottom: 25px;
            display: inline-block;
            position: relative;
        }

        .logo-frame {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(145deg, var(--gold-primary), transparent, var(--gold-dark));
            box-shadow: 0 10px 25px rgba(0,0,0,0.6), 0 0 20px rgba(212, 175, 55, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            transition: transform 0.4s ease;
        }

        .logo-frame:hover {
            transform: scale(1.04);
        }

        .logo-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #000;
        }

        .badge-status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(212, 175, 55, 0.12);
            color: var(--gold-light);
            border: 1px solid rgba(212, 175, 55, 0.35);
            padding: 6px 20px;
            border-radius: 50px;
            font-size: 0.88rem;
            letter-spacing: 0.5px;
            margin-bottom: 18px;
        }

        .badge-status i {
            font-size: 0.75rem;
            animation: spin 5s linear infinite;
        }

        @keyframes spin {
            100% { transform: rotate(360deg); }
        }

        h1 {
            font-family: 'Amiri', serif;
            font-size: 2.9rem;
            margin-bottom: 12px;
            background: linear-gradient(180deg, #ffffff 45%, var(--gold-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .description {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            max-width: 500px;
            margin: 0 auto 30px auto;
        }

        /* العداد التنازلي */
        .countdown {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 35px;
            flex-wrap: wrap;
        }

        .time-box {
            background: rgba(8, 8, 12, 0.65);
            border: 1px solid rgba(212, 175, 55, 0.22);
            border-radius: 16px;
            padding: 12px 18px;
            min-width: 82px;
            box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.6);
        }

        .time-box .num {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--gold-light);
            display: block;
        }

        .time-box .lbl {
            font-size: 0.78rem;
            color: var(--text-muted);
        }

        /* أزرار التواصل السريع */
        .contact-box {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 25px;
        }

        .contact-box p {
            font-size: 0.95rem;
            color: #d8d8e0;
            margin-bottom: 16px;
        }

        .buttons-row {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 10px 22px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-whatsapp {
            background: #25D366;
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.25);
        }

        .btn-whatsapp:hover {
            background: #1eb956;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4);
        }

        .btn-outline {
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
            border: 1px solid rgba(212, 175, 55, 0.35);
        }

        .btn-outline:hover {
            background: var(--gold-primary);
            color: #0c0c0e;
            transform: translateY(-3px);
            border-color: var(--gold-primary);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.3);
        }

        footer {
            margin-top: 30px;
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.35);
        }

        @media (max-width: 480px) {
            h1 { font-size: 2.2rem; }
            .coming-soon-card { padding: 35px 20px; }
            .time-box { min-width: 65px; padding: 10px 8px; }
            .time-box .num { font-size: 1.4rem; }
            .logo-frame { width: 110px; height: 110px; }
        }
    </style>
</head>
<body>

    <div class="ambient-glow"></div>

    <main class="coming-soon-card">
        <!-- شعار المتجر -->
        <div class="logo-container">
            <div class="logo-frame">
                <img src="<?php echo $logo_url; ?>" alt="شعار <?php echo $store_name; ?>" class="logo-img">
            </div>
        </div>

        <div class="badge-status">
            <i class="fa-solid fa-gem"></i>
            <span>الموقع تحت الإنشاء والتجهيز</span>
        </div>

        <h1><?php echo $store_name; ?></h1>
        
        <p class="description">
            <?php echo $store_tagline; ?>.<br>
            نعمل حالياً على إعداد متجرنا الإلكتروني لنقدم لكم أرقى التراكيب والعطور الفاخرة بجودة لا تُضاهى. ترقبوا الافتتاح قريباً!
        </p>

        <!-- عداد تنازلي -->
        <div class="countdown">
            <div class="time-box">
                <span class="num" id="days">00</span>
                <span class="lbl">يوم</span>
            </div>
            <div class="time-box">
                <span class="num" id="hours">00</span>
                <span class="lbl">ساعة</span>
            </div>
            <div class="time-box">
                <span class="num" id="minutes">00</span>
                <span class="lbl">دقيقة</span>
            </div>
            <div class="time-box">
                <span class="num" id="seconds">00</span>
                <span class="lbl">ثانية</span>
            </div>
        </div>

        <!-- أزرار التواصل المباشر -->
        <div class="contact-box">
            <p>لطلبات الشراء والاستفسارات الحالية يسعدنا تواصلكم عبر:</p>
            <div class="buttons-row">
                <a href="https://wa.me/<?php echo $whatsapp_phone; ?>" target="_blank" class="btn btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> تواصل عبر واتساب
                </a>
                <a href="tel:<?php echo $phone_number; ?>" class="btn btn-outline">
                    <i class="fa-solid fa-phone"></i> اتصال هاتفي
                </a>
            </div>
        </div>

        <footer>
            جميع الحقوق محفوظة &copy; <?php echo date('Y'); ?> <?php echo $store_name; ?>
        </footer>
    </main>

    <script>
        // إعداد عداد تنازلي (افتراضياً 15 يوماً من الآن)
        const targetDate = new Date();
        targetDate.setDate(targetDate.getDate() + 15);

        function updateCountdown() {
            const now = new Date().getTime();
            const diff = targetDate.getTime() - now;

            if (diff <= 0) {
                document.getElementById('days').innerText = "00";
                document.getElementById('hours').innerText = "00";
                document.getElementById('minutes').innerText = "00";
                document.getElementById('seconds').innerText = "00";
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('days').innerText = String(days).padStart(2, '0');
            document.getElementById('hours').innerText = String(hours).padStart(2, '0');
            document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
            document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();
    </script>
</body>
</html>
