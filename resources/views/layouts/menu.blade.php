<li class="{{ Route::currentRouteName() == 'sisdeck.home' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.home') }}" title="Dashboard"><i class="fas fa-fw fa-chart-line mr-3"></i><span>Dashboard</span></a>
</li>
<li class="treeview {{ Route::currentRouteName() == 'sisdeck.academics.index' || Route::currentRouteName() == 'sisdeck.academics.create' || Route::currentRouteName() == 'sisdeck.academics.show' || Route::currentRouteName() == 'sisdeck.academics.edit' || Route::currentRouteName() == 'sisdeck.batches.index' || Route::currentRouteName() == 'sisdeck.batches.create' || Route::currentRouteName() == 'sisdeck.batches.show' || Route::currentRouteName() == 'sisdeck.batches.edit' || Route::currentRouteName() == 'sisdeck.classes.index' || Route::currentRouteName() == 'sisdeck.classes.create' || Route::currentRouteName() == 'sisdeck.classes.show' || Route::currentRouteName() == 'sisdeck.classes.edit' || Route::currentRouteName() == 'sisdeck.classrooms.index' || Route::currentRouteName() == 'sisdeck.classrooms.create' || Route::currentRouteName() == 'sisdeck.classrooms.show' || Route::currentRouteName() == 'sisdeck.classrooms.edit' || Route::currentRouteName() == 'sisdeck.courses.index' || Route::currentRouteName() == 'sisdeck.courses.create' || Route::currentRouteName() == 'sisdeck.courses.show' || Route::currentRouteName() == 'sisdeck.courses.edit' || Route::currentRouteName() == 'sisdeck.days.index' || Route::currentRouteName() == 'sisdeck.days.create' || Route::currentRouteName() == 'sisdeck.days.show' || Route::currentRouteName() == 'sisdeck.days.edit' || Route::currentRouteName() == 'sisdeck.faculties.index' || Route::currentRouteName() == 'sisdeck.faculties.create' || Route::currentRouteName() == 'sisdeck.faculties.show' || Route::currentRouteName() == 'sisdeck.faculties.edit' || Route::currentRouteName() == 'sisdeck.levels.index' || Route::currentRouteName() == 'sisdeck.levels.create' || Route::currentRouteName() == 'sisdeck.levels.show' || Route::currentRouteName() == 'sisdeck.levels.edit' || Route::currentRouteName() == 'sisdeck.semesters.index' || Route::currentRouteName() == 'sisdeck.semesters.create' || Route::currentRouteName() == 'sisdeck.semesters.show' || Route::currentRouteName() == 'sisdeck.semesters.edit' || Route::currentRouteName() == 'sisdeck.shifts.index' || Route::currentRouteName() == 'sisdeck.shifts.create' || Route::currentRouteName() == 'sisdeck.shifts.show' || Route::currentRouteName() == 'sisdeck.shifts.edit' || Route::currentRouteName() == 'sisdeck.times.index' || Route::currentRouteName() == 'sisdeck.times.create' || Route::currentRouteName() == 'sisdeck.times.show' || Route::currentRouteName() == 'sisdeck.times.edit' ? 'active' : '' }}">
    <a href="#" title="General"><i class="fas fa-fw fa-book mr-3"></i><span class="label">General</span><span class="pull-right-container"><i class="fas fa-fw fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
        <li class="{{ Route::currentRouteName() == 'sisdeck.academics.index' || Route::currentRouteName() == 'sisdeck.academics.create' || Route::currentRouteName() == 'sisdeck.academics.show' || Route::currentRouteName() == 'sisdeck.academics.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.academics.index') }}" title="Academics"><i class="fas fa-fw fa-edit mr-3"></i><span>Academics</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.batches.index' || Route::currentRouteName() == 'sisdeck.batches.create' || Route::currentRouteName() == 'sisdeck.batches.show' || Route::currentRouteName() == 'sisdeck.batches.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.batches.index') }}" title="Batches"><i class="fas fa-fw fa-edit mr-3"></i><span>Batches</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.classes.index' || Route::currentRouteName() == 'sisdeck.classes.create' || Route::currentRouteName() == 'sisdeck.classes.show' || Route::currentRouteName() == 'sisdeck.classes.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.classes.index') }}" title="Classes"><i class="fas fa-fw fa-edit mr-3"></i><span>Classes</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.classrooms.index' || Route::currentRouteName() == 'sisdeck.classrooms.create' || Route::currentRouteName() == 'sisdeck.classrooms.show' || Route::currentRouteName() == 'sisdeck.classrooms.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.classrooms.index') }}" title="Clasrooms"><i class="fas fa-fw fa-edit mr-3"></i><span>Classrooms</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.courses.index' || Route::currentRouteName() == 'sisdeck.courses.create' || Route::currentRouteName() == 'sisdeck.courses.show' || Route::currentRouteName() == 'sisdeck.courses.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.courses.index') }}" title="Courses"><i class="fas fa-fw fa-edit mr-3"></i><span>Courses</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.days.index' || Route::currentRouteName() == 'sisdeck.days.create' || Route::currentRouteName() == 'sisdeck.days.show' || Route::currentRouteName() == 'sisdeck.days.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.days.index') }}" title="Days"><i class="fas fa-fw fa-edit mr-3"></i><span>Days</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.faculties.index' || Route::currentRouteName() == 'sisdeck.faculties.create' || Route::currentRouteName() == 'sisdeck.faculties.show' || Route::currentRouteName() == 'sisdeck.faculties.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.faculties.index') }}" title="Faculties"><i class="fas fa-fw fa-edit mr-3"></i><span>Faculties</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.levels.index' || Route::currentRouteName() == 'sisdeck.levels.create' || Route::currentRouteName() == 'sisdeck.levels.show' || Route::currentRouteName() == 'sisdeck.levels.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.levels.index') }}" title="Levels"><i class="fas fa-fw fa-edit mr-3"></i><span>Levels</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.semesters.index' || Route::currentRouteName() == 'sisdeck.semesters.create' || Route::currentRouteName() == 'sisdeck.semesters.show' || Route::currentRouteName() == 'sisdeck.semesters.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.semesters.index') }}"><i class="fas fa-fw fa-edit mr-3"></i><span>Semesters</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.shifts.index' || Route::currentRouteName() == 'sisdeck.shifts.create' || Route::currentRouteName() == 'sisdeck.shifts.show' || Route::currentRouteName() == 'sisdeck.shifts.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.shifts.index') }}" title="Shifts"><i class="fas fa-fw fa-edit mr-3"></i><span>Shifts</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.times.index' || Route::currentRouteName() == 'sisdeck.times.create' || Route::currentRouteName() == 'sisdeck.times.show' || Route::currentRouteName() == 'sisdeck.times.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.times.index') }}" title="Times"><i class="fas fa-fw fa-edit mr-3"></i><span>Times</span></a>
        </li>
    </ul>
</li>
<li class="treeview {{ Route::currentRouteName() == 'sisdeck.class_assignments.index' || Route::currentRouteName() == 'sisdeck.class_assignments.create' || Route::currentRouteName() == 'sisdeck.class_assignments.show' || Route::currentRouteName() == 'sisdeck.class_assignments.edit' || Route::currentRouteName() == 'sisdeck.class_schedules.index' || Route::currentRouteName() == 'sisdeck.class_schedules.create' || Route::currentRouteName() == 'sisdeck.class_schedules.show' || Route::currentRouteName() == 'sisdeck.class_schedules.edit' ? 'active' : '' }}">
    <a href="#" title="Schedule"><i class="fas fa-fw fa-calendar mr-3"></i><span class="label">Schedules</span><span class="pull-right-container"><i class="fas fa-fw fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
        <li class="{{ Route::currentRouteName() == 'sisdeck.class_assignments.index' || Route::currentRouteName() == 'sisdeck.class_assignments.create' || Route::currentRouteName() == 'sisdeck.class_assignments.show' || Route::currentRouteName() == 'sisdeck.class_assignments.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.class_assignments.index') }}" title="Class Assignings"><i class="fas fa-fw fa-edit mr-3"></i><span>Class Assignments</span></a>
        </li>
        <li class="{{ Route::currentRouteName() == 'sisdeck.class_schedules.index' || Route::currentRouteName() == 'sisdeck.class_schedules.create' || Route::currentRouteName() == 'sisdeck.class_schedules.show' || Route::currentRouteName() == 'sisdeck.class_schedules.edit' ? 'active' : '' }}">
            <a href="{{ route('sisdeck.class_schedules.index') }}" title="Class Schedulings"><i class="fas fa-fw fa-edit mr-3"></i><span>Class Schedules</span></a>
        </li>
    </ul>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.attendances.index' || Route::currentRouteName() == 'sisdeck.attendances.create' || Route::currentRouteName() == 'sisdeck.attendances.show' || Route::currentRouteName() == 'sisdeck.attendances.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.attendances.index') }}" title="Attendances"><i class="fas fa-fw fa-concierge-bell mr-3"></i><span>Attendances</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.transactions.index' || Route::currentRouteName() == 'sisdeck.transactions.create' || Route::currentRouteName() == 'sisdeck.transactions.show' || Route::currentRouteName() == 'sisdeck.transactions.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.transactions.index') }}" title="Transactions"><i class="fas fa-fw fa-money-bill mr-3"></i><span>Transactions</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.roles.index' || Route::currentRouteName() == 'sisdeck.roles.create' || Route::currentRouteName() == 'sisdeck.roles.show' || Route::currentRouteName() == 'sisdeck.roles.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.roles.index') }}" title="Roles"><i class="fas fa-fw fa-user-tag mr-3"></i><span>Roles</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.students.index' || Route::currentRouteName() == 'sisdeck.students.create' || Route::currentRouteName() == 'sisdeck.students.show' || Route::currentRouteName() == 'sisdeck.students.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.students.index') }}" title="Students"><i class="fas fa-fw fa-user-graduate mr-3"></i><span>Students</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.teachers.index' || Route::currentRouteName() == 'sisdeck.teachers.create' || Route::currentRouteName() == 'sisdeck.teachers.show' || Route::currentRouteName() == 'sisdeck.teachers.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.teachers.index') }}" title="Teachers"><i class="fas fa-fw fa-user-circle mr-3"></i><span>Teachers</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.users.index' || Route::currentRouteName() == 'sisdeck.users.create' || Route::currentRouteName() == 'sisdeck.users.show' || Route::currentRouteName() == 'sisdeck.users.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.users.index') }}" title="Users"><i class="fas fa-fw fa-user mr-3"></i><span>Users</span></a>
</li>