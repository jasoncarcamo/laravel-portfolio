@extends("layout.app")

@section("title", "About Jason Carcamo")

@push("styles")
    <link href="/css/about.css" rel="stylesheet"/>
@endpush

@section("content")
<section id="about-section">
    <img class="about-image" src="./images/about.jpg" alt="Background of room"/>

    <section id="about-summary-container">
        <h2>A little about me...</h2>

        <p>I create full stack web applications from scratch or with fun frameworks and libraries. I create RESTful APIs and React applications on my free time, while also learning new technologies and software best practices</p>

        <p>I use PostgreSQL to create and maintain databases. Databases are fun for me because I get to visualize data to see universal patterns with relational databases. Seeing patterns and noticing trends come naturally as I have an eye for detail. No problem is too big when I plan, organize and break problems into small pieces.</p>

        <p>Call me Jay!</p>
    </section>
</section>
@stop