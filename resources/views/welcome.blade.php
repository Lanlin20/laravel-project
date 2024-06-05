<x-layout>
<div class="spaxe-y-10">

<section>
<x-section-heading> Featured Jobs</x-section-heading>


<div class=" grid lg:grid-cols-3 gap-8 mt-6 ">

<x-job-card></x-job-card>
<x-job-card></x-job-card>
<x-job-card></x-job-card>

</div>

</section>

<section>
   <x-section-heading>Tags</x-section-heading> 

   <div class="mt-6 space-x-1"> 
   <x-tag>New</x-tag>
   <x-tag>Latest</x-tag>
   <x-tag>Lately</x-tag>
   <x-tag>Upcoming</x-tag>
   <x-tag>Generative</x-tag>
   <x-tag>API's</x-tag>
   <x-tag>Comunicated</x-tag>
   <x-tag>Upgraded</x-tag>
   <x-tag>Delete</x-tag>
   <x-tag>Update</x-tag>
   </div>
</section>

<section>
   <x-section-heading>Recent Jobs</x-section-heading> 

   <div class="mt-6 space-y-3"> 
    <x-job-card-wide> </x-job-card-wide>
    <x-job-card-wide></x-job-card-wide>
    <x-job-card-wide></x-job-card-wide>

   </div>



</section>
</div>

</x-layout>

