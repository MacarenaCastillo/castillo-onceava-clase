# dno037-2017-11

### Optativo de Profundización / Diseño / UC

Miércoles 24 de mayo

Este curso ofrece una introducción práctica al desarrollo de Aplicaciones Web, con énfasis en la codificación del diseño de interfaz gráfica e interacción, según las prácticas estandarizadas en interoperabilidad, accesibilidad y usabilidad.

**Por esta introducción práctica, ya conocemos 2 lenguajes que NO son lenguajes de programación: HTML y CSS.** Dedicamos a estos lenguajes las clases:

- https://github.com/profesorfaco/dno037-2017-01
- https://github.com/profesorfaco/dno037-2017-02
- https://github.com/profesorfaco/dno037-2017-03
- https://github.com/profesorfaco/dno037-2017-04
- https://github.com/profesorfaco/dno037-2017-05
- https://github.com/profesorfaco/dno037-2017-06

### HTML (HyperText Markup Language). 

[HTML](https://developer.mozilla.org/es/docs/Web/HTML) es un lenguaje utilizado para describir y definir el contenido de una página web. Su *building block* es el elemento HTML, que se presenta habitualmente con la siguiente forma: `<etiqueta>contenido</etiqueta>`

Pueden poner a prueba lo aprendido respondiendo a las 40 preguntas en [W3Schools HTML Quiz](https://www.w3schools.com/quiztest/quiztest.asp?Qtest=HTML)

### CSS (Cascading Style Sheets)

[CSS](https://developer.mozilla.org/es/docs/Web/CSS) es un lenguaje utilizado para describir la presentación de una página web. Su *building block* es la regla CSS, que se presenta habitualmente con la siguiente forma: `selector{propiedad:valor;}`

Pueden poner a prueba lo aprendido respondiendo a las 25 preguntas en [W3Schools CSS Quiz](https://www.w3schools.com/quiztest/quiztest.asp?qtest=CSS)

-----

Para trabajar en prototipos de páginas web que avancen rápidamente hasta productos finales, podemos aprovechar algunos de los *framework for developing responsive, mobile first projects on the web*. Entre las múltiples opciones, podemos mencionar a [Bootstrap](http://getbootstrap.com/), [Semantic UI](https://semantic-ui.com/), [Foundation](http://foundation.zurb.com/), [Materialize](http://materializecss.com/) y otras. 

Nosotros exploramos la primera y más popular de las opciones, en su versión 3: [Bootstrap](http://getbootstrap.com/). 

Pueden poner a prueba lo aprendido respondiendo a las 25 preguntas en [W3Schools Bootstrap Quiz](https://www.w3schools.com/quiztest/quiztest.asp?qtest=Bootstrap)

-----

**Por esta introducción práctica también conocemos 2 lenguajes de programación muy utilizados en el desarrollo de Aplicaciones Web: JavaScript y PHP.** Dedicamos a estos lenguajes las clases más complejas:

- https://github.com/profesorfaco/dno037-2017-07
- https://github.com/profesorfaco/dno037-2017-08
- https://github.com/profesorfaco/dno037-2017-09
- https://github.com/profesorfaco/dno037-2017-10

### JS (JavaScript) 

Este lenguaje es utilizado para programar scripts que se ejecutan del lado del cliente. Cuando [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript/Guide) se ejecuta, no modifica directamente el código fuente de la página web sino que el [DOM](https://es.wikipedia.org/wiki/Document_Object_Model) de la misma; podemos seguirle la pista a esta ejecución mediante la [Consola de JavaScript](https://transferwise.com/es/help/article/2247654/tecnico-navegador/como-abrir-la-consola-de-tu-navegador) que incluyen los navegadores.

Nuestra introducción a JavaScript la hicimos mediante una biblioteca particular, la de [p5.js](https://p5js.org/). Lo hicimos así porque esta biblioteca, que es una reinterpretación de Processing para la web actual, fue creada para hacer la programación accesible a artistas, diseñadores, educadores y principiantes.

Otra biblioteca que hemos utilizado, sin ponerle mucha atención, es la de [jQuery](http://jquery.com/): La hemos incluído y aprovechado en cada sitio desarrollado con [Bootstrap 3](http://getbootstrap.com/).

### PHP (Hypertext Preprocessor)

Este lenguaje es utilizado para programar scripts que se ejecutan del lado del servidor, afectando directamente al código fuente de la página web justo antes de que éste sea enviado al cliente.

Nuestra introducción a [PHP](http://php.net/manual/es/getting-started.php) la hicimos atendiendo, primero, a [las diferencias de la sintaxis de este lenguaje y JavaScript](http://profesor.faco.cl/diferencias.php). Diferencias que no son tan radicales como la diferencia de "lugares" de ejecución.

-----

La última clase que dedicaremos a estos lenguajes es la de hoy, miércoles 24 de mayo. En la clases que siguen pasaremos al quinto y último módulo del curso, donde cada estudiante desarrollará un prototipo de Aplicación Web para comprobar o demostrar el aprovechamiento en los estudios. 

-----

### Ejercicio

Hoy cada estudiante, trabajando individualmente, debe preparar un sitio con:

- página de portada que muestre antecedentes y referentes para su proyecto, como artículos alimentados por un `*.CSV`;
- página que despliegue solamente una categoría de artículos, sea antecedentes o referentes;
- página que despliegue el detalle de cada artículo en portada;
- página tipo *about*, de descripción del proyecto final; y 
- página tipo *contacto*, con un formulario donde se pueda escribir un mensaje que recibirán en sus correos personales.

Cada página debe incluir los mismos `header.php` y `footer.php`, para evitar repeticiones que sólo demorarían el proceso.
