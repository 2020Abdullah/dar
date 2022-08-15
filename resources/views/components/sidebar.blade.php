  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('index') }}">
          <i class="bi bi-grid"></i>
          <span>نظرة عامة</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <!--  إدخال بيانات الفتيات  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('create') }}" id="Add-stu">
          <i class="bi bi-menu-button-wide"></i><span>إدخال بيانات الفتيات</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
      <!--  إدخال بيانات الهروب  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('index-escape.create') }}" id="index-escape-create">
          <i class="bi bi-journal-text"></i><span>إدخال بيانات الهروب والعودة</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
      <!--  إدخال بيانات الخروج  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('index-exit.create') }}" id="index-exit-create">
          <i class="bi bi-journal-text"></i><span>إدخال بيانات الخروج</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
      <!-- تقارير البيانات الأساسية للنزلاء -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('list') }}" id="showList">
          <i class="bi bi-layout-text-window-reverse"></i><span>سجل البيانات الأساسية للنزلاء</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
      <!-- تقارير بيانات الهروب  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('index-escape.index') }}" id="index-escape">
          <i class="bi bi-layout-text-window-reverse"></i><span>سجل الهروب والعودة </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
        <!--  سجل الخروج  -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('index-exit.index') }}" id="index-exit-index">
                <i class="bi bi-journal-text"></i><span>سجل الخروج</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
        </li>
    </ul>

  </aside><!-- End Sidebar-->
