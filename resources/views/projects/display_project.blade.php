@push("scripts")
    <script src="/js/projects.js"></script>
@endpush

@stack("scripts")
<section class="project">   
    <section>
        <div class="close-project">
            <div></div>
            <div></div>
        </div>

        <button class="display-project-btn">View</button>

        <div class="author-container">
            <div class="author-icon"></div>

            <div class="author-info">
                <p>Jason C.</p>

                @php
                    $date_started = date_parse($project->date_started);
                    $date_finished = date_parse($project->date_finished);

                    echo "<p>$date_started[month]/$date_started[day]/$date_started[year]<span class='date-separator'></span> $date_finished[month]/$date_finished[day]/$date_finished[year]</p>";
                @endphp
            </div>

            <div class="author-options">
                <div class="author-options-dot"> </div>
                <div class="author-options-dot"> </div>
                <div class="author-options-dot"> </div>

                <div class="project-options">
                    <a class="live-link" href="{{$project->live_url}}" target='_blank' aria-label="${frontendProjects[i].Name} View" rel="noopener">View</a>
                    <a href="{{$project->repo_url}}" target='_blank' aria-label="${frontendProjects[i].Name} github repository" rel="noopener">GitHub Repo</a>
                </div>
            </div>

        </div>

        <div class="project-info">
            <h3>{{$project->title}}</h3>

            <p>{{$project->description}}</p>

            <p><strong>Tech Stack:</strong></p>
            <ul>
                @foreach(json_decode($project->skills) as $skill)
                    <li>
                        {{$skill}}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</section>