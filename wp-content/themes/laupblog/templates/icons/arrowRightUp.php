<?php 
   $custom_arrow_class = isset($args["custom_arrow_class"]) ? $args["custom_arrow_class"] : "w-6 h-6";
?>

<svg 
   xmlns="http://www.w3.org/2000/svg" 
   fill="none" 
   viewBox="0 0 24 24" 
   stroke-width="1.5" 
   stroke="currentColor" 
   class="<?php echo $custom_arrow_class ?>"
>
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
</svg>
