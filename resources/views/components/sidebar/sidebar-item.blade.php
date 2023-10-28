
 @if ($active == "1")
 <li>
    <a href={{route($route)}} class="flex items-center p-2 text-gray-900 rounded-lg
    dark:text-white
    bg-gray-600
    hover:bg-gray-200 dark:hover:bg-gray-700 group">
       {{$text}}
    </a>
 </li>
 @else
 <li>
    <a href={{route($route)}} class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
       {{$text}}
    </a>
 </li>
 @endif
