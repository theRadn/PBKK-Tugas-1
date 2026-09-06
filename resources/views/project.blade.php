<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Pitch - Agentic AI IDE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Background Effects */
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }
        
        .text-glow {
            text-shadow: 0 0 25px rgba(16, 185, 129, 0.6);
        }
        
        .box-glow {
            box-shadow: 0 0 40px rgba(16, 185, 129, 0.15);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #030712; }
        ::-webkit-scrollbar-thumb { background: #1f2937; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #374151; }
    </style>
</head>
<body class="bg-gray-950 text-gray-300 font-sans antialiased selection:bg-emerald-500 selection:text-white overflow-x-hidden">

    <!-- ==================== SHARED SITE NAVBAR ==================== -->
    <nav class="bg-gray-900 border-b border-gray-800 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-center gap-6 text-sm font-semibold">
            <a href="/" class="text-gray-400 hover:text-gray-200 transition">Beranda</a>
            <a href="/about" class="text-gray-400 hover:text-gray-200 transition">Profil Jurusan</a>
            <a href="/project-idea" class="text-emerald-400 hover:text-emerald-300 transition">Rencana Project</a>
            <a href="/hitung" class="text-gray-400 hover:text-gray-200 transition">Kalkulator</a>
        </div>
    </nav>

    <!-- ==================== PAGE SECTION LINKS ==================== -->
    <nav class="bg-gray-950/80 backdrop-blur-lg border-b border-gray-800/50 py-3 sticky top-[57px] z-40">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-5 text-sm font-semibold">
            <div class="text-emerald-400 font-black tracking-widest text-base text-glow flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                AGENTIC.IDE
            </div>
            <div class="hidden md:flex gap-6">
                <a href="#problem" class="text-gray-400 hover:text-white transition">The Problem</a>
                <a href="#features" class="text-gray-400 hover:text-white transition">Features</a>
                <a href="#agent" class="text-gray-400 hover:text-white transition">Agentic AI</a>
                <a href="#roadmap" class="text-gray-400 hover:text-white transition">Roadmap</a>
            </div>
            <a href="#features" class="px-4 py-1.5 bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 rounded-full hover:bg-emerald-500 hover:text-white transition text-xs">
                Explore Project
            </a>
        </div>
    </nav>

    <!-- ==================== 1. HERO SECTION ==================== -->
    <header class="relative min-h-screen flex flex-col items-center justify-center bg-grid-pattern pt-20 pb-32">
        <!-- Ambient Glow Background -->
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-emerald-500/10 blur-[150px] rounded-full pointer-events-none z-0"></div>
        
        <div class="z-10 text-center max-w-6xl px-6 w-full flex flex-col items-center">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-b from-white to-gray-500">
                CODE. THINK. COLLABORATE.
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-12 tracking-wide">
                The Next Generation of Web-Based Development.
            </p>
            
            <h2 class="text-3xl md:text-5xl font-bold text-emerald-400 mb-8 text-glow">
                A VS CODE THAT THINKS WITH YOU.
            </h2>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mb-12 leading-relaxed">
                A collaborative web-based development environment powered by Agentic AI, seamlessly integrated with GitHub.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-20">
                <a href="#features" class="px-8 py-4 bg-emerald-500 hover:bg-emerald-400 text-gray-950 rounded-full font-bold text-lg transition duration-300 shadow-[0_0_30px_rgba(16,185,129,0.4)]">
                    Explore the Project
                </a>
                <a href="#architecture" class="px-8 py-4 bg-transparent hover:bg-gray-900 text-white rounded-full font-bold text-lg transition duration-300 border border-gray-700">
                    View Architecture
                </a>
            </div>

            <!-- UI Mockup Placeholder -->
            <!-- please insert image here: UI Mockup of the Web IDE showing Code + AI Agent Chat side by side -->
            <div class="w-full aspect-video bg-gray-900/60 backdrop-blur-md rounded-2xl border border-gray-700 box-glow flex flex-col overflow-hidden relative">
                <!-- Mockup Header -->
                <div class="h-10 border-b border-gray-800 flex items-center px-4 gap-2 bg-gray-950/50">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <!-- Mockup Body (Placeholder) -->
                <div class="flex-1 flex items-center justify-center text-gray-500 flex-col">
                    <svg class="w-16 h-16 mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class="font-mono text-sm tracking-widest">[ INSERT HIGH-RES UI MOCKUP HERE ]</p>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== 2. WHY THIS PROJECT? ==================== -->
    <section id="problem" class="py-32 px-6 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-24">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">
                    Development Has Evolved.<br>
                    <span class="text-gray-600">Our IDE Should Too.</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-4xl mx-auto leading-relaxed">
                    Modern software development is no longer an individual activity. Developers work across repositories, branches, pull requests, and increasingly, AI-assisted workflows. Yet these capabilities are often scattered across different tools.
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 mb-24">
                <!-- Problem 01 -->
                <article class="p-10 bg-gray-900/40 rounded-3xl border border-gray-800 hover:border-gray-600 transition duration-300">
                    <div class="text-7xl text-gray-800/50 font-black mb-6">01</div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Fragmented Workflow</h3>
                    <p class="text-gray-400 leading-relaxed">Code editor, GitHub, AI assistant, and collaboration tools often live separately, constantly breaking developer focus and context.</p>
                </article>
                <!-- Problem 02 -->
                <article class="p-10 bg-gray-900/40 rounded-3xl border border-gray-800 hover:border-gray-600 transition duration-300">
                    <div class="text-7xl text-gray-800/50 font-black mb-6">02</div>
                    <h3 class="text-2xl font-bold mb-4 text-white">AI That Only Responds</h3>
                    <p class="text-gray-400 leading-relaxed">Traditional AI assistants wait passively for prompts instead of actively reasoning about the project architecture and proposing solutions.</p>
                </article>
                <!-- Problem 03 -->
                <article class="p-10 bg-gray-900/40 rounded-3xl border border-gray-800 hover:border-gray-600 transition duration-300">
                    <div class="text-7xl text-gray-800/50 font-black mb-6">03</div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Collaboration is Hard</h3>
                    <p class="text-gray-400 leading-relaxed">Developers need to switch between local IDEs, Git platforms, and communication tools just to solve a single shared issue.</p>
                </article>
            </div>

            <div class="text-center text-3xl md:text-5xl font-black text-emerald-400 text-glow mt-10">
                Our project brings them together in one environment.
            </div>
        </div>
    </section>

    <!-- ==================== 3. WHAT ARE WE BUILDING? ==================== -->
    <section class="py-24 px-6 bg-gray-900 border-t border-gray-800 relative overflow-hidden">
        <div class="max-w-5xl mx-auto text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-white">One Workspace. Entire Development Workflow.</h2>
            
            <!-- Conceptual Diagram (Styled HTML/CSS instead of raw ASCII) -->
            <div class="bg-gray-950 p-10 rounded-3xl border border-gray-700 mb-12 shadow-2xl font-mono text-sm sm:text-base text-gray-400 overflow-x-auto">
                <pre class="inline-block text-left">
                     <span class="text-white border border-gray-700 bg-gray-800 px-6 py-2 rounded-lg">    GitHub     </span>
                             │
                             ▼
<span class="text-emerald-400 border border-emerald-900 bg-emerald-900/20 px-4 py-2 rounded-lg"> Collaborator </span>◄────►<span class="text-white border-2 border-emerald-500 bg-gray-900 px-8 py-3 rounded-lg shadow-[0_0_15px_rgba(16,185,129,0.3)]">  Web-based IDE  </span>◄────►<span class="text-purple-400 border border-purple-900 bg-purple-900/20 px-4 py-2 rounded-lg">  Agentic AI  </span>
                             │
                             ▼
                     <span class="text-red-400 border border-red-900 bg-red-900/20 px-6 py-2 rounded-lg">Laravel Backend</span>
                </pre>
            </div>

            <p class="text-xl text-gray-300 leading-relaxed max-w-4xl mx-auto">
                A browser-based development environment that combines code editing, GitHub integration, real-time collaboration, and autonomous AI agents into a single, cohesive workspace.
            </p>
        </div>
    </section>

    <!-- ==================== 4. KEY FEATURES ==================== -->
    <section id="features" class="py-32 px-6 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-20 text-center text-white">Key Features</h2>

            <div class="grid md:grid-cols-2 gap-8">
                
                <!-- Feature 1: Agentic AI -->
                <article class="p-10 bg-gray-900 rounded-3xl border border-gray-800 flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(16,185,129,0.15)] hover:border-emerald-500/50 transition duration-500">
                    <div>
                        <div class="w-16 h-16 bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-8 border border-emerald-500/20 text-3xl">🤖</div>
                        <h3 class="text-3xl font-bold text-white mb-4">Agentic AI</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed text-lg">AI that doesn't just answer questions — it can analyze the codebase, reason about problems, and execute development tasks.</p>
                    </div>
                    <ul class="space-y-3 text-base font-mono text-emerald-400/80">
                        <li class="flex items-center gap-3"><span class="text-emerald-500">▹</span> Analyze codebase context</li>
                        <li class="flex items-center gap-3"><span class="text-emerald-500">▹</span> Detect bugs autonomously</li>
                        <li class="flex items-center gap-3"><span class="text-emerald-500">▹</span> Execute development workflows</li>
                    </ul>
                </article>

                <!-- Feature 2: GitHub -->
                <article class="p-10 bg-gray-900 rounded-3xl border border-gray-800 flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(59,130,246,0.15)] hover:border-blue-500/50 transition duration-500">
                    <div>
                        <div class="w-16 h-16 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-8 border border-blue-500/20 text-3xl">🔗</div>
                        <h3 class="text-3xl font-bold text-white mb-4">GitHub Integration</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed text-lg">Seamlessly connect projects with GitHub repositories directly from the browser without local setups.</p>
                    </div>
                    <ul class="space-y-3 text-base font-mono text-blue-400/80">
                        <li class="flex items-center gap-3"><span class="text-blue-500">▹</span> Clone & Commit visually</li>
                        <li class="flex items-center gap-3"><span class="text-blue-500">▹</span> Branch management</li>
                        <li class="flex items-center gap-3"><span class="text-blue-500">▹</span> Pull request synchronization</li>
                    </ul>
                </article>

                <!-- Feature 3: Collaboration -->
                <article class="p-10 bg-gray-900 rounded-3xl border border-gray-800 flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(245,158,11,0.15)] hover:border-amber-500/50 transition duration-500">
                    <div>
                        <div class="w-16 h-16 bg-amber-500/10 rounded-2xl flex items-center justify-center mb-8 border border-amber-500/20 text-3xl">👥</div>
                        <h3 class="text-3xl font-bold text-white mb-4">Real-Time Collaboration</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed text-lg">Work on the same codebase with your teammates simultaneously, just like editing a Google Doc.</p>
                    </div>
                    <ul class="space-y-3 text-base font-mono text-amber-400/80">
                        <li class="flex items-center gap-3"><span class="text-amber-500">▹</span> Multiple users & cursors</li>
                        <li class="flex items-center gap-3"><span class="text-amber-500">▹</span> Real-time text broadcasting</li>
                        <li class="flex items-center gap-3"><span class="text-amber-500">▹</span> Live presence indicators</li>
                    </ul>
                </article>

                <!-- Feature 4: IDE -->
                <article class="p-10 bg-gray-900 rounded-3xl border border-gray-800 flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(168,85,247,0.15)] hover:border-purple-500/50 transition duration-500">
                    <div>
                        <div class="w-16 h-16 bg-purple-500/10 rounded-2xl flex items-center justify-center mb-8 border border-purple-500/20 text-3xl">💻</div>
                        <h3 class="text-3xl font-bold text-white mb-4">VS Code-like Environment</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed text-lg">A familiar, fully-featured development environment powered by Monaco Editor, delivered in-browser.</p>
                    </div>
                    <ul class="space-y-3 text-base font-mono text-purple-400/80">
                        <li class="flex items-center gap-3"><span class="text-purple-500">▹</span> File explorer & Tabs</li>
                        <li class="flex items-center gap-3"><span class="text-purple-500">▹</span> Advanced syntax highlighting</li>
                        <li class="flex items-center gap-3"><span class="text-purple-500">▹</span> Integrated web terminal</li>
                    </ul>
                </article>

            </div>
        </div>
    </section>

    <!-- ==================== 5. THE AGENT SECTION ==================== -->
    <section id="agent" class="py-32 px-6 bg-gray-900 border-t border-gray-800">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-6xl font-bold mb-6 text-center text-white">
                Not Just an Assistant.<br>
                <span class="text-emerald-400 text-glow">An Agent.</span>
            </h2>
            <p class="text-xl text-gray-400 text-center mb-16 max-w-3xl mx-auto">
                Unlike standard chat models, our Agentic AI executes a systematic loop: it analyzes your code, forms a plan, executes changes, and verifies the result.
            </p>
            
            <!-- Agent Visual Demo -->
            <!-- please insert image here: Optional animated GIF of the agent working -->
            <div class="bg-gray-950 rounded-3xl border border-gray-700 p-8 md:p-12 box-glow">
                <div class="font-mono text-base max-w-3xl mx-auto">
                    
                    <!-- User Prompt -->
                    <div class="mb-12">
                        <div class="text-gray-500 mb-2 font-bold tracking-wider text-sm">YOU</div>
                        <div class="text-white bg-gray-800 px-6 py-4 rounded-r-2xl rounded-bl-2xl inline-block border border-gray-700 shadow-lg">
                            "Fix the authentication bug on login."
                        </div>
                    </div>
                    
                    <!-- Agent Process -->
                    <div class="mb-12 pl-12 border-l-2 border-emerald-900/50 relative">
                        <div class="absolute -left-[17px] top-0 w-8 h-8 bg-gray-950 border-2 border-emerald-500 rounded-full flex items-center justify-center text-emerald-500">↓</div>
                        <div class="text-emerald-500/70 mb-4 font-bold tracking-wider text-sm">AGENT REASONING</div>
                        <div class="space-y-4 text-gray-400 bg-gray-900/50 p-6 rounded-xl border border-gray-800">
                            <div class="flex items-center gap-3"><span class="text-emerald-400 animate-pulse">●</span> <span class="text-white font-semibold w-20">Analyze</span> <span class="text-gray-500">Scanning AuthController.php...</span></div>
                            <div class="flex items-center gap-3"><span class="text-emerald-400 animate-pulse" style="animation-delay: 200ms">●</span> <span class="text-white font-semibold w-20">Plan</span> <span class="text-gray-500">Missing password hash verification step.</span></div>
                            <div class="flex items-center gap-3"><span class="text-emerald-400 animate-pulse" style="animation-delay: 400ms">●</span> <span class="text-white font-semibold w-20">Execute</span> <span class="text-gray-500">Patching line 45.</span></div>
                            <div class="flex items-center gap-3"><span class="text-emerald-400 animate-pulse" style="animation-delay: 600ms">●</span> <span class="text-white font-semibold w-20">Verify</span> <span class="text-gray-500">Running AuthTest... Passed.</span></div>
                        </div>
                    </div>

                    <!-- Agent Output -->
                    <div class="text-right">
                        <div class="text-emerald-500 mb-2 font-bold tracking-wider text-sm">AI AGENT</div>
                        <div class="text-emerald-50 bg-emerald-900/30 px-6 py-4 rounded-l-2xl rounded-br-2xl inline-block border border-emerald-500/30 shadow-lg text-left max-w-2xl">
                            "I found the issue in `AuthController.php`. I've applied the fix to securely verify the password hash and checked the affected tests. The login is now secure."
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 6. COLLABORATION IN ACTION ==================== -->
    <section class="py-32 px-6 bg-gray-950 border-t border-gray-800 relative">
        <div class="max-w-6xl mx-auto flex flex-col items-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white text-center">One Codebase. Multiple Minds.</h2>
            <p class="text-xl text-gray-400 mb-16 text-center max-w-3xl">
                Just like Google Docs, developers can work on the same project simultaneously — while the AI agent assists the entire workspace.
            </p>
            
            <!-- Collaborative Code Editor Mockup -->
            <!-- please insert image here: Visual showing multiple cursors with names like "Arda" and "Aji" editing the same code -->
            <div class="w-full bg-[#1e1e1e] rounded-xl border border-gray-700 shadow-2xl overflow-hidden font-mono text-sm sm:text-base leading-loose relative">
                <!-- Mac style header -->
                <div class="bg-[#2d2d2d] px-4 py-3 flex justify-between items-center border-b border-black">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                    </div>
                    <div class="text-gray-400 text-xs flex gap-4">
                        <span class="flex items-center gap-1"><div class="w-2 h-2 rounded-full bg-blue-400"></div> Arda</span>
                        <span class="flex items-center gap-1"><div class="w-2 h-2 rounded-full bg-amber-500"></div> Aji</span>
                        <span class="flex items-center gap-1"><div class="w-2 h-2 rounded-full bg-emerald-400"></div> Agent</span>
                    </div>
                </div>
                
                <!-- Code Body -->
                <div class="p-8 text-gray-300 overflow-x-auto">
                    <div><span class="text-pink-400">public</span> <span class="text-blue-400">function</span> <span class="text-yellow-200">authenticate</span>(<span class="text-orange-300">Request</span> <span class="text-blue-200">$request</span>) {</div>
                    <div class="pl-8 text-gray-500 italic">// Validate incoming request</div>
                    <div class="pl-8"><span class="text-blue-200">$credentials</span> = <span class="text-blue-200">$request</span>-><span class="text-yellow-200">validate</span>([</div>
                    <div class="pl-16"><span class="text-green-300">'email'</span> => <span class="text-green-300">'required|email'</span>,</div>
                    <div class="pl-16"><span class="text-green-300">'password'</span> => <span class="text-green-300">'required'</span></div>
                    <div class="pl-8">]);</div>
                    <br>
                    <div class="pl-8 text-gray-500 italic">// Check credentials</div>
                    
                    <!-- Simulating Arda's Cursor -->
                    <div class="pl-8 relative inline-block">
                        <span class="text-pink-400">if</span> (<span class="text-teal-400">Auth</span>::<span class="text-yellow-200">attempt</span>(<span class="text-blue-200">$credentials</span>)) {
                        <span class="absolute top-0 left-[-4px] w-[2px] h-5 bg-blue-400 animate-pulse"></span>
                        <span class="absolute -top-5 left-0 bg-blue-400 text-white text-[10px] font-sans px-2 py-0.5 rounded shadow">Arda</span>
                    </div>
                    
                    <div class="pl-16"><span class="text-blue-200">$request</span>-><span class="text-yellow-200">session</span>()-><span class="text-yellow-200">regenerate</span>();</div>
                    
                    <!-- Simulating Aji's Cursor Typing -->
                    <div class="pl-16 relative mt-2">
                        <span class="text-pink-400">return</span> <span class="text-yellow-200">redirect</span>()->
                        <span class="inline-block w-[2px] h-4 bg-amber-500 animate-pulse align-middle ml-1"></span>
                        <span class="absolute -top-5 left-32 bg-amber-500 text-white text-[10px] font-sans px-2 py-0.5 rounded shadow z-10 whitespace-nowrap">Aji is typing...</span>
                    </div>
                    
                    <div class="pl-8">}</div>
                    <div class="pl-8"><span class="text-pink-400">return</span> <span class="text-yellow-200">back</span>()-><span class="text-yellow-200">withErrors</span>([<span class="text-green-300">'email'</span> => <span class="text-green-300">'Invalid login.'</span>]);</div>
                    <div>}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 7. UNDER THE HOOD & 8. TECH STACK ==================== -->
    <section id="architecture" class="py-32 px-6 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-20">
            
            <!-- Under the hood Diagram -->
            <article>
                <h2 class="text-3xl font-bold mb-10 text-white">Under the Hood</h2>
                <div class="bg-gray-950 p-8 rounded-3xl border border-gray-800 shadow-xl font-mono text-sm text-emerald-400 overflow-x-auto flex justify-center items-center h-[400px]">
                    <pre class="leading-relaxed">
        USER
         │
         ▼
 ┌───────────────┐
 │   Web Client  │
 │ (VS Code-UI)  │
 └───────┬───────┘
         │
  ┌──────┴──────┐
  ▼             ▼
┌────────┐   ┌────────┐
│ Laravel│   │ Agent  │
│ Backend│   │ Engine │
└────┬───┘   └───┬────┘
     │           │
     ▼           ▼
┌────────┐   ┌────────┐
│ GitHub │   │ LLM/API│
└────────┘   └────────┘
                    </pre>
                </div>
            </article>

            <!-- Tech Stack -->
            <article>
                <h2 class="text-3xl font-bold mb-10 text-white">Built With</h2>
                <div class="space-y-4">
                    
                    <div class="p-6 bg-gray-950 rounded-2xl border border-gray-800 flex flex-col sm:flex-row sm:items-center gap-4 hover:border-gray-600 transition">
                        <div class="w-32 font-bold text-gray-500 uppercase tracking-widest text-xs">Frontend</div>
                        <div class="text-white font-medium text-lg">Monaco Editor, JS, Tailwind CSS</div>
                    </div>
                    
                    <div class="p-6 bg-gray-950 rounded-2xl border border-gray-800 flex flex-col sm:flex-row sm:items-center gap-4 hover:border-gray-600 transition">
                        <div class="w-32 font-bold text-gray-500 uppercase tracking-widest text-xs">Backend</div>
                        <div class="text-white font-medium text-lg">Laravel 11+ / PHP 8.4 / MySQL</div>
                    </div>
                    
                    <div class="p-6 bg-gray-950 rounded-2xl border border-gray-800 flex flex-col sm:flex-row sm:items-center gap-4 hover:border-gray-600 transition">
                        <div class="w-32 font-bold text-gray-500 uppercase tracking-widest text-xs">AI Core</div>
                        <div class="text-white font-medium text-lg">Custom Agent Framework + LLM API</div>
                    </div>
                    
                    <div class="p-6 bg-gray-950 rounded-2xl border border-gray-800 flex flex-col sm:flex-row sm:items-center gap-4 hover:border-gray-600 transition">
                        <div class="w-32 font-bold text-gray-500 uppercase tracking-widest text-xs">Integration</div>
                        <div class="text-white font-medium text-lg">GitHub REST & GraphQL API</div>
                    </div>
                    
                    <div class="p-6 bg-gray-950 rounded-2xl border border-gray-800 flex flex-col sm:flex-row sm:items-center gap-4 hover:border-gray-600 transition">
                        <div class="w-32 font-bold text-gray-500 uppercase tracking-widest text-xs">Realtime</div>
                        <div class="text-white font-medium text-lg">WebSockets / Laravel Reverb</div>
                    </div>

                </div>
            </article>

        </div>
    </section>

    <!-- ==================== 9. ROADMAP ==================== -->
    <section id="roadmap" class="py-32 px-6 bg-gray-950 border-t border-gray-800">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-20 text-center text-white">From Idea to Implementation</h2>
            
            <!-- Vertical Timeline -->
            <div class="relative space-y-12 before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-1 before:bg-gradient-to-b before:from-emerald-500 before:via-gray-700 before:to-transparent">
                
                <!-- Phase 1 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between md:odd:flex-row-reverse group">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-gray-950 bg-emerald-500 text-gray-950 font-black shadow-lg shrink-0 md:order-1 transition z-10">01</div>
                    <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] p-8 rounded-3xl bg-gray-900 border border-emerald-500/30 hover:border-emerald-500 transition duration-300 mt-4 md:mt-0 text-left md:odd:text-right">
                        <h3 class="text-xl font-bold text-white mb-2">Core IDE Foundation</h3>
                        <p class="text-gray-400">Basic Monaco editor integration, file system structure visualization, and secure user authentication setup.</p>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between md:odd:flex-row-reverse group">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-gray-950 bg-gray-700 group-hover:bg-blue-500 group-hover:text-white font-black shadow-lg shrink-0 md:order-1 transition z-10">02</div>
                    <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] p-8 rounded-3xl bg-gray-900 border border-gray-800 group-hover:border-blue-500/50 transition duration-300 mt-4 md:mt-0 text-left md:odd:text-right">
                        <h3 class="text-xl font-bold text-white mb-2">GitHub Integration</h3>
                        <p class="text-gray-400">Repository cloning mechanism, version control basics, branch selection, and commit management UI.</p>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between md:odd:flex-row-reverse group">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-gray-950 bg-gray-700 group-hover:bg-purple-500 group-hover:text-white font-black shadow-lg shrink-0 md:order-1 transition z-10">03</div>
                    <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] p-8 rounded-3xl bg-gray-900 border border-gray-800 group-hover:border-purple-500/50 transition duration-300 mt-4 md:mt-0 text-left md:odd:text-right">
                        <h3 class="text-xl font-bold text-white mb-2">Agentic AI Engine</h3>
                        <p class="text-gray-400">Implementation of LLM context windowing, code reasoning logic, and autonomous codebase modification scripts.</p>
                    </div>
                </div>

                <!-- Phase 4 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between md:odd:flex-row-reverse group">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-gray-950 bg-gray-700 group-hover:bg-amber-500 group-hover:text-white font-black shadow-lg shrink-0 md:order-1 transition z-10">04</div>
                    <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] p-8 rounded-3xl bg-gray-900 border border-gray-800 group-hover:border-amber-500/50 transition duration-300 mt-4 md:mt-0 text-left md:odd:text-right">
                        <h3 class="text-xl font-bold text-white mb-2">Real-time Collaboration</h3>
                        <p class="text-gray-400">WebSocket integration for multi-user document editing, cursor coordinate tracking, and live presence.</p>
                    </div>
                </div>

                <!-- Phase 5 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between md:odd:flex-row-reverse group">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-gray-950 bg-gray-700 group-hover:bg-white group-hover:text-gray-900 font-black shadow-lg shrink-0 md:order-1 transition z-10">05</div>
                    <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] p-8 rounded-3xl bg-gray-900 border border-gray-800 group-hover:border-gray-500 transition duration-300 mt-4 md:mt-0 text-left md:odd:text-right">
                        <h3 class="text-xl font-bold text-white mb-2">Workspace Integration</h3>
                        <p class="text-gray-400">Combining all elements into a unified layout, polishing UI/UX, testing edge cases, and final deployment.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== 10. CLOSING ==================== -->
    <section class="py-40 px-6 bg-gray-900 border-t border-gray-800 text-center relative overflow-hidden">
        <!-- Background Ambient for Footer -->
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-[1000px] h-[500px] bg-emerald-500/10 blur-[150px] rounded-[100%] pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto relative z-10">
            <h2 class="text-4xl md:text-6xl font-bold mb-8 text-white leading-tight">
                The IDE shouldn't just be where developers write code.
            </h2>
            <p class="text-2xl md:text-3xl text-emerald-400 font-light mb-16 text-glow">
                It should be where developers think, collaborate, and build.
            </p>
            <a href="/" class="inline-block px-12 py-5 bg-white text-gray-950 rounded-full font-black text-xl hover:bg-gray-200 transition duration-300 shadow-[0_0_40px_rgba(255,255,255,0.3)] hover:scale-105">
                Explore Our Project
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-950 border-t border-gray-800 p-10 text-center text-gray-500 text-sm font-medium">
        <p>PBKK Tugas 1 &copy; 2026. Built with Laravel, Monaco, & Tailwind CSS.</p>
    </footer>

</body>
</html>