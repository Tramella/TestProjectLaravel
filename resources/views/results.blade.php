<x-layout>
<x-page-heading>Results</x-page-heading>
<div class="mt-4 space-y-3">

    @foreach ($jobs as $job)
    <x-job-card-wide :job="$job"/>
    @endforeach
</div>

</x-layout>
