<x-layout>
    @section('title')
        {{ 'about me ·' }}
    @endsection
    @section('h1')
        {{ 'about me' }}
    @endsection
    @section('content')
        <div>
            <x-h2>{{ 'educational background' }}</x-h2>
            <div class='max-w-xl mx-auto mt-10'>
                <ul class='space-y-12'>
                    <x-timeline-item title='Full-stack web developer'
                    link='https://github.com/poliannapaim'
                    info='self taught · 2022 -'
                    ></x-timeline-item>
                    <x-timeline-item title="Master's Degree in Informatics"
                    link='http://www.prppg.ufpr.br/site/ppginf/pb/'
                    info='ufpr · 2020-2022'
                    ></x-timeline-item>
                    <x-timeline-item title="Bachelor's Degree in Information Systems"
                    link='https://www.ufmt.br/'
                    info='ufmt · 2020-2022'
                    ></x-timeline-item>
                </ul>
            </div>
        </div>
        <div>
            <x-h2>{{ 'work philosophy' }}</x-h2>
            <p>
                I believe in taking a <span class='text-terra-cotta'>user-centered approach</span> to software development, prioritizing empathy and understanding of the end-users.<br>
                My work is guided by a strong set of values, including <span class='text-terra-cotta'>transparency</span>, <span class='text-terra-cotta'>accountability</span>, and a <span class='text-terra-cotta'>commitment</span> to delivering high-quality results to the company.<br>
                My ultimate goal is to create <span class='text-terra-cotta'>user-friendly and efficient solutions</span> that meet the unique needs and goals of the company and the end-users.
            </p>
        </div>
        <div>
            <x-h2>{{ 'full-stack developer skills' }}</x-h2>
            <p>
                I possess skillset in various areas including <span class='text-terra-cotta'>HTML5, CSS3, and Responsive Design</span> which allow me to create visually appealing and user-friendly websites. I am also proficient in using <span class='text-terra-cotta'>TailwindCSS</span> to streamline my CSS development process.<br>
                In terms of server-side development, I have experience working with <span class='text-terra-cotta'>Laravel, Node.js, and Restful APIs</span> to build robust and scalable applications. I am well-versed in version control with <span class='text-terra-cotta'>Git</span>, and have experience deploying applications on <span class='text-terra-cotta'>Amazon EC2 instances with Nginx</span>. My knowledge in <span class='text-terra-cotta'>SQL and MySQL</span> enables me to design efficient databases.<br>
                In addition to these technical skills, I am comfortable working with design tools such as <span class='text-terra-cotta'>Figma</span>. I am familiar with <span class='text-terra-cotta'>Terminal/Shell and Debian/Linux</span> environments and am proficient in using <span class='text-terra-cotta'>Insomnia</span> for API testing.
            </p>
            <div class='w-600 flex flex-wrap gap-3 items-end justify-around mt-10'>
                <x-tag-item>{{ 'HTML5' }}</x-tag-item>
                <x-tag-item>{{ 'CSS3' }}</x-tag-item>
                <x-tag-item>{{ 'Responsive Design' }}</x-tag-item>
                <x-tag-item>{{ 'TailwindCSS' }}</x-tag-item>
                <x-tag-item>{{ 'Laravel' }}</x-tag-item>
                <x-tag-item>{{ 'Node.js' }}</x-tag-item>
                <x-tag-item>{{ 'Restful API' }}</x-tag-item>
                <x-tag-item>{{ 'Insomnia' }}</x-tag-item>
                <x-tag-item>{{ 'Git' }}</x-tag-item>
                <x-tag-item>{{ 'Amazon EC2' }}</x-tag-item>
                <x-tag-item>{{ 'Nginx' }}</x-tag-item>
                <x-tag-item>{{ 'SQL' }}</x-tag-item>
                <x-tag-item>{{ 'Figma' }}</x-tag-item>
                <x-tag-item>{{ 'Terminal/Shell' }}</x-tag-item>
                <x-tag-item>{{ 'Debian/Linux' }}</x-tag-item>
            </div>
        </div>
        <div>
            <x-h2>{{ 'ux researcher skills' }}</x-h2>
            <p>
                I possess a strong and broad skill set in <span class='text-terra-cotta'>user-centered design</span>, which includes conducting <span class='text-terra-cotta'>usability testing, interviews and surveys</span>, and working collaboratively with users to design and evaluate digital products. I am experienced in both <span class='text-terra-cotta'>qualitative and quantitative analysis, generating requirements, wireframing, creating user flows and prototypes</span>, and using <span class='text-terra-cotta'>design thinking</span> to solve complex problems. Additionally, I have <span class='text-terra-cotta'>research communication and reporting</span> skills, enabling me to effectively convey findings and recommendations to stakeholders and team members.
            </p>
            <div class='w-600 flex flex-wrap gap-3 items-end justify-around mt-10'>
                <x-tag-item>{{ 'User-centered design' }}</x-tag-item>
                <x-tag-item>{{ 'Usability testing' }}</x-tag-item>
                <x-tag-item>{{ 'Interview' }}</x-tag-item>
                <x-tag-item>{{ 'Collaborative work' }}</x-tag-item>
                <x-tag-item>{{ 'Design' }}</x-tag-item>
                <x-tag-item>{{ 'Evaluation' }}</x-tag-item>
                <x-tag-item>{{ 'Qualitative analysis' }}</x-tag-item>
                <x-tag-item>{{ 'Quantitative analysis' }}</x-tag-item>
                <x-tag-item>{{ 'Requirements elicitation' }}</x-tag-item>
                <x-tag-item>{{ 'Wireframing' }}</x-tag-item>
                <x-tag-item>{{ 'User flows' }}</x-tag-item>
                <x-tag-item>{{ 'Prototypes' }}</x-tag-item>
                <x-tag-item>{{ 'Design thinking' }}</x-tag-item>
                <x-tag-item>{{ 'Research report' }}</x-tag-item>
            </div>
        </div>
    @endsection
</x-layout>