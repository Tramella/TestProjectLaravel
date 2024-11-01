<x-layout>
    <div class="space-y-10">

    <section class="text-center">
        <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

        {{-- <form action="" class="mt-6">
            <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl"/>
        </form> --}}

        <x-forms.form action="/search" class="mt-6">
        <x-forms.input :label="false" name="q" placeholder="Web Developer..."/>
        </x-forms.input>
    </section>
    <section class="pt-10">
        <x-section-heading>Featured Jobs</x-section-heading>

        <div class="grid lg:grid-cols-3 gap-8">
            @foreach ($featuredJobs as $job)
            <x-job-card :job="$job"/>
            @endforeach
        </div>
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-4 space-x-1">

            @foreach ( $tags as $tag)
                <x-tag :tag="$tag"/>
            @endforeach


        </div>
    </section>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-4 space-y-3">

            @foreach ($jobs as $job)
            <x-job-card-wide :job="$job"/>
            @endforeach
        </div>
    </section>
</div>
</x-layout>
