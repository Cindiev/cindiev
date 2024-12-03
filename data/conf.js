let selectedMovie = null;

const moviesData = [
    {
        title: "La X Misteriosa",
        details: "75 min ESP",
        image: "assets/movies/laxmisteriosa.jpg",
        cover: "assets/movies/laxmisteriosa_cover.jpg",
        trailer: "assets/movies/trailers/xtrailer.mp4",
        description: "Un emocionante thriller dirigido por Michael Curtiz. La historia sigue a un científico que inventa un dispositivo revolucionario y queda atrapado en una conspiración internacional para robar su creación. A medida que los enemigos se acercan, debe proteger su invento y salvar a su familia en medio de persecuciones y traiciones.",
        schedules: ['10:00', '11:10', '12:20', '13:30', '14:40']
    },
    {
        title: "El que recibe el bofetón",
        details: "90 min ENG",
        image: "assets/movies/bofeton.png",
        cover: "assets/movies/bofeton_cover.jpg",
        trailer: "assets/movies/trailers/xtrailer.mp4",
        description: "Protagonizada por Lon Chaney, este drama dirigido por Victor Sjöström es una desgarradora exploración del orgullo y la humillación. Un científico, traicionado por su esposa y su benefactor, se reinventa como un payaso que se convierte en el hazmerreír de un circo. Su dolor interior se refleja en su espectáculo, mientras trama venganza contra aquellos que lo traicionaron.",
        schedules: ['10:00', '11:10', '12:20', '13:30', '14:40']
    },
    {
        title: "El Colegial",
        details: "90 min ENG",
        image: "assets/movies/colegial.jpg",
        cover: "assets/movies/colegial_cover.jpg",
        trailer: "assets/movies/trailers/xtrailer.mp4",
        description: "Una comedia clásica de Buster Keaton, en la que interpreta a un estudiante aplicado que intenta conquistar a su amor participando en deportes para los que no tiene ningún talento natural. Entre gags y torpezas, aprende que el esfuerzo y la autenticidad valen más que el éxito superficial.",
        schedules: ['10:00', '11:10', '12:20', '13:30', '14:40']
    },
    {
        title: "El Séptimo Cielo",
        details: "90 min ENG",
        image: "assets/movies/septimo.jpg",
        cover: "assets/movies/septimo_cover.jpg",
        trailer: "assets/movies/trailers/xtrailer.mp4",
        description: "Un drama romántico dirigido por Frank Borzage. La película sigue a un humilde limpiador de calles parisino y una joven oprimida que se enamoran y se apoyan mutuamente en medio de las dificultades de la Primera Guerra Mundial. Su fe mutua y su amor inquebrantable los elevan por encima de la desesperación, 'hasta el séptimo cielo'.",
        schedules: ['10:00', '11:10', '12:20', '13:30', '14:40']
    },
    {
        title: "Las Dos Huérfanas",
        details: "60 min ESP",
        image: "assets/movies/huerfanas_wide.jpg",
        cover: "assets/movies/huerfanas.jpg",
        trailer: "assets/movies/trailers/xtrailer.mp4",
        description: "Dirigida por D.W. Griffith, este drama histórico está ambientado en la Revolución Francesa. Sigue a dos hermanas separadas por las turbulencias de la época. Una es secuestrada por un aristócrata y la otra se une a las masas revolucionarias, conmoviendo con su lucha por reunirse y sobrevivir.",
        schedules: ['10:00', '11:10', '12:20', '13:30', '14:40']
    },
    {
        title: "El Enemigo Invisible",
        details: "90 min ENG",
        image: "assets/movies/invisible.jpg",
        cover: "assets/movies/invisible_cover.jpg",
        trailer: "assets/movies/trailers/xtrailer.mp4",
        description: "Una película muda de D.W. Griffith. En este corto de suspense, dos hermanas ricas deben enfrentarse a un ladrón que invade su hogar, poniendo a prueba su ingenio y valentía. Con un ritmo rápido y tenso, esta obra ayudó a establecer algunos de los principios del cine de acción.",
        schedules: ['10:00', '11:10', '12:20', '13:30', '14:40']
    }
];