@extends("layout.app")

@section("title", "Technologies I specealize in")

@push("styles")
    <link href="/css/technologies.css" rel="stylesheet"/>
@endpush

@push("scripts")
    <script src="/js/technologies.js"></script>
@endpush

@section("content")
<section id="skills-section">             
    <section id="frontend-skills">
        <div>
            <header class="skill-header">
                <i class="fas fa-code fas-skill"></i>
                <h2>Frontend</h2>
            </header>

            <ul>
                <li>Html 5 ( Semantics / SEO)</li>
                <li>Css 3</li>
                <li>Bootstrap</li>
                <li>JavaScript</li>
                <li>React.js</li>
                <li>React Native</li>
            </ul>
        </div>
    </section>

    <section id="backend-skills">
        <div>
            <header class="skill-header">
                <i class="fas fa-server fas-skill"></i>
                <h2>Backend / Server-side</h2>
            </header>
            
            <ul>
                <li>PHP</li>
                <li>MySQL</li>
                <li>PostgreSQL</li>
                <li>C#</li>
                <li>Express.js</li>
                <li>RESTful API</li>
                <li>Knex.js</li>
            </ul>
        </div>
    </section>
        
    <section id="development-tools"> 
        <div>
            <header class="skill-header">
                <i class="fas fa-hammer fas-skill"></i>
                <h2>Development Tools</h2>
            </header>

            <ul>
                <li>Git</li>
                <li>GitHub</li>
                <li>Node.js</li>
                <li>Laravel</li>
                <li>ASP.NET</li>
                <li>Unit Testing</li>
                <li>Test Driven Development</li>     
                <li>Mocha.js</li>
                <li>Enzyme.js</li>
                <li>Jest.js</li>
                <li>Command Line</li>
                <li>Relational Databases</li>
                <li>Heroku</li>
                <li>Zeit</li>
            </ul>
        </div>
    </section>
</section>
@stop