@props([
    'route',
    'label',
    'icon',
    'active' => false // خاصية جديدة لتحديد ما إذا كان الرابط فعالاً
])
<li class="{{ $active ? 'mm-active' : '' }}">
    <a href="{{$route}}" >
        <div class="parent-icon">
            <i class="material-icons-outlined">{{$icon}}</i>
        </div>
        <div class="menu-title">{{$label}}</div>
    </a>
</li>
