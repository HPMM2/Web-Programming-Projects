<html>
    <head>
<style type="text/css">
    body {
        color: purple;
        background-color: #d8da3d }

        #seccion1 {
            font-size: 48px;
            text-align: center;
            background-image: url(https://th.bing.com/th/id/OIP.dxCPgXvc1ckG5AnoWkmDWwHaD6?w=338&h=180&c=7&r=0&o=5&pid=1.7);
            background-size: contain;
        }
        #proyectos {
            display: grid;
            grid-template-columns: auto auto;

        }
        .proyecto img {
            withd: 50%;
        }
        </style>
    </head>
    <body>
        <section id="seccion1">
            <h1>Bienvenidos!<h1>
        </section>
        <section> id="proyectos">
    </body>
    <script>
        const datos = [{
            img'https://th.bing.com/th/id/OIP.dxCPgXvc1ckG5AnoWkmDWwHaD6?w=338&h=180&c=7&r=0&o=5&pid=1.7',
            desc: 'HTML'
        },
        {
            img: 'https://th.bing.com/th/id/OIP.dxCPgXvc1ckG5AnoWkmDWwHaD6?w=338&h=180&c=7&r=0&o=5&pid=1.7',
            desc: 'CSS'
        },
        {
         
            img:'https://th.bing.com/th/id/OIP.dxCPgXvc1ckG5AnoWkmDWwHaD6?w=338&h=180&c=7&r=0&o=5&pid=1.7',
            desc: 'javascript'
        }]  
        console.log('hello fime');
        let proyectos = document.querySelector('#proyectos');
        proyectos.style.background = 'red';

        function dinamico(src,desc) {
            let div = document.createElement("div");
            let img = document.createElement("img");
            img.src = src;
            let p = document.createElement("p");
            p.innerHTML = desc;
            div.appendChild(img);
            div.appendChild(p);
            proyextos.appendChild(div);

        }

        datos.forEach(({img, src}) => dinamico(img,src));


        </script>
    </html>

          

        
        
        
    