@extends("layout.app")

@section("title", "Add a new project your collection")

@push("styles")
    <link href="/css/create-project.css" rel="stylesheet"/>
@endpush

@section("content")
    <section id="create-project-section">
        <form id="create-project-form">
            <fieldset id="create-project-fieldset">
                <legend id="create-project-legend">
                    <h1>Add a new project to our collection</h1>
                </legend>

                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">Category</label>
                    <input id="" class="create-project-input" type="text"/>
                </div>

                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">Title</label>
                    <input id="" class="create-project-input" type="text"/>
                </div>


                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">Description</label>
                    <input id="" class="create-project-input" type="text"/>
                </div>

                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">Images</label>
                    <input id="" class="create-project-input" type="file"/>
                </div>

                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">Live Url</label>
                    <input id="" class="create-project-input" type="text"/>
                </div>

                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">GitHub Repository</label>
                    <input id="" class="create-project-input" type="text"/>
                </div>

                <div class="create-project-input-container">
                    <p class="create-project-label-header">Skills</p>
                    

                    <div>
                        <input id="" class="create-project-input" type="checkbox" name="" value="Html"/>
                        <label id="" class="create-project-label" for="">Html</label>
                    </div>

                    <div>
                        <input id="" class="create-project-input" type="checkbox" name="" value="Css"/>
                        <label id="" class="create-project-label" for="">Css</label>
                    </div>

                    <div>
                        <input id="" class="create-project-input" type="checkbox" name="" value="JavaScript"/>
                        <label id="" class="create-project-label" for="">JavaScript</label>
                    </div>

                    <div>
                        <input id="" class="create-project-input" type="checkbox" name="" value="PHP"/>
                        <label id="" class="create-project-label" for="">PHP</label>
                    </div>

                    <div>
                        <input id="" class="create-project-input" type="checkbox" name="" value="ReactJS"/>
                        <label id="" class="create-project-label" for="">ReactJS</label>
                    </div>
                </div>

                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">Date Started</label>
                    <input id="" class="create-project-input" type="date"/>
                </div>

                <div class="create-project-input-container">
                    <label id="" class="create-project-label" for="">Date Finished</label>
                    <input id="" class="create-project-input" type="date"/>
                </div>
                
                <div class="create-project-input-container">
                    <button>Add to collection</button>
                </div>
            </fieldset>
        </form>
    </section>
@stop