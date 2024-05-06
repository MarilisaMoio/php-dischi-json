<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discs</title>
    <link rel="stylesheet" href="css/style.css">
    <!--vue.js-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <h1>Disc Finder</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="disc-card" v-for="disc in discs">
                    <img :src="disc.poster" :alt="disc.title">
                    <div class="text-wrapper">
                        <h4>{{ disc.title }}</h4>
                        <small>{{ disc.author }}</small>
                        <div>{{ disc.year }}</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>