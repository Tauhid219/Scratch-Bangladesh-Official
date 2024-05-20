<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('mydashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Students</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('student.index') }}">
                <i class="bi bi-person"></i>
                <span>Students List</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('student.create') }}">
                <i class="bi bi-person"></i>
                <span>Create Students</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#students-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="students-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Student Form</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-bar-chart"></i>
                <span>Charts</span>
            </a>
        </li><!-- End Charts Page Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>

            {{-- <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Logout</p>
            </a> --}}
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li><!-- End Logout Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Retrieve the state of the dropdown from local storage
        var studentsNavCollapsed = localStorage.getItem('studentsNavCollapsed');
        if (studentsNavCollapsed === 'false') {
            // If the dropdown was previously expanded, expand it again
            document.getElementById('students-nav').classList.add('show');
        }

        // Add click event listener to the dropdown toggle link
        document.getElementById('students-nav').addEventListener('click', function(event) {
            // Store the state of the dropdown in local storage
            localStorage.setItem('studentsNavCollapsed', this.classList.contains('show').toString());
        });
    });
</script>
