<x-layout>
    <x-page-heading>Create A New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs" entype="multipart/form-data">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part time</option>
            <option>Full time</option>
        </x-forms.select>

        <x-forms.input label="Url" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>


        <x-forms.checkbox label='Feature (Cost Extra)' name='featured'/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" palceholder="laracasts, video, education"/>
        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
