<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InstaApp - Home</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        :root {
            --bg-body: #f5f5f4;
            --bg-card: #ffffff;
            --border-soft: #e5e5e0;
            --text-main: #111827;
            --text-muted: #6b7280;
            --accent: #f97316;
            --accent-soft: #fef3c7;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: radial-gradient(circle at top left, #fefce8, #f5f5f4);
            font-family: "Instrument Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: var(--text-main);
        }

        /* Header Navigation */
        .navbar {
            position: sticky;
            top: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-soft);
            padding: 0.75rem 0;
            z-index: 100;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
        }

        .nav-container {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .app-name {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            font-size: 0.8rem;
            padding: 0.25rem 0.6rem;
            border-radius: 999px;
            background: var(--accent-soft);
            color: #92400e;
        }

        .app-dot {
            width: 0.55rem;
            height: 0.55rem;
            border-radius: 999px;
            background: var(--accent);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-main);
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.15s ease;
        }

        .nav-link:hover {
            color: var(--accent);
        }

        .btn-logout {
            border: none;
            border-radius: 999px;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            font-weight: 500;
            color: #ffffff;
            background: linear-gradient(to right, #dc2626, #ef4444);
            cursor: pointer;
            transition: transform 0.12s ease, box-shadow 0.12s ease;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }

        .btn-logout:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.3);
        }

        .btn-logout:active {
            transform: translateY(0);
        }

        /* Main Content */
        .main-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }

        .welcome-wrapper {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            align-items: stretch;
        }

        .welcome-section {
            flex: 1;
            background: var(--bg-card);
            border-radius: 1.25rem;
            border: 1px solid var(--border-soft);
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.06);
        }

        .welcome-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0 0 0.5rem;
        }

        .welcome-text {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin: 0;
        }

        .create-section {
            background: var(--bg-card);
            border-radius: 1.25rem;
            border: 1px solid var(--border-soft);
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.06);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-create-inline {
            border: none;
            border-radius: 999px;
            padding: 0.8rem 1.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: #ffffff;
            background: linear-gradient(to right, #f97316, #fb923c);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: transform 0.12s ease, box-shadow 0.12s ease;
            box-shadow: 0 8px 20px rgba(249, 115, 22, 0.25);
        }

        .btn-create-inline:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 28px rgba(249, 115, 22, 0.3);
        }

        .btn-create-inline:active {
            transform: translateY(0);
            box-shadow: 0 6px 16px rgba(249, 115, 22, 0.28);
        }

        /* Post Card */
        .post-card {
            background: var(--bg-card);
            border-radius: 1.25rem;
            border: 1px solid var(--border-soft);
            margin-bottom: 1.5rem;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.06);
            transition: box-shadow 0.2s ease;
        }

        .post-card:hover {
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.1);
        }

        .post-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.25rem;
        }

        .post-avatar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--accent), #fb923c);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .post-user-info {
            flex: 1;
        }

        .post-username {
            font-weight: 600;
            font-size: 0.9rem;
            margin: 0;
        }

        .post-time {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin: 0;
        }

        .post-image {
            width: 100%;
            height: auto;
            display: block;
            background: #f3f4f6;
        }

        .post-content {
            padding: 1rem 1.25rem;
        }

        .post-caption {
            font-size: 0.9rem;
            line-height: 1.5;
            color: var(--text-main);
            margin: 0 0 1rem;
        }

        .post-actions {
            display: flex;
            gap: 0.75rem;
            padding-top: 0.5rem;
            border-top: 1px solid var(--border-soft);
        }

        .btn-action {
            flex: 1;
            border: none;
            border-radius: 0.7rem;
            padding: 0.6rem;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            transition: all 0.15s ease;
            background: #f9fafb;
            color: var(--text-main);
        }

        .btn-action:hover {
            background: var(--accent-soft);
            color: #92400e;
        }

        .btn-action.liked {
            background: var(--accent-soft);
            color: var(--accent);
        }



        /* Responsive */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 1rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .nav-link {
                display: none;
            }

            .main-container {
                padding: 1.5rem 1rem;
            }

            .welcome-wrapper {
                flex-direction: column;
            }

            .create-section {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    {{-- Navigation --}}
    <nav class="navbar">
        <div class="nav-container">
            <div class="app-name">
                <span class="app-dot"></span>
                <span>InstaApp</span>
            </div>

            <div class="nav-links">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">Profile</a>
                <form method="POST" action="{{ route("logout") }}" style="display: inline;">
                    @csrf
                    <button class="btn-logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="main-container">
        {{-- Welcome & Create Section --}}
        <div class="welcome-wrapper">
            <div class="welcome-section">
                <h1 class="welcome-title">Welcome to InstaApp</h1>
                <p class="welcome-text">Sharing your stories and moments with the world</p>
            </div>

            <div class="create-section">
                <button class="btn-create-inline">
                    <span style="font-size: 1.2rem;">+</span>
                    <span>Create Post</span>
                </button>
            </div>
        </div>

        {{-- Post 1 --}}
        <article class="post-card">
            <div class="post-header">
                <div class="post-avatar">JD</div>
                <div class="post-user-info">
                    <p class="post-username">johndoe</p>
                    <p class="post-time">2 hours ago</p>
                </div>
            </div>

            <img src="https://via.placeholder.com/600x400/f97316/ffffff?text=Beautiful+Sunset" 
                 alt="Post Image" 
                 class="post-image">

            <div class="post-content">
                <p class="post-caption">Beautiful sunset at the beach today! The colors were absolutely stunning. Can't wait to come back here again. 🌅</p>

                <div class="post-actions">
                    <button class="btn-action">
                        <span>♥</span>
                        <span>Like</span>
                    </button>
                    <button class="btn-action">
                        <span>💬</span>
                        <span>Comment</span>
                    </button>
                </div>
            </div>
        </article>

        {{-- Post 2 --}}
        <article class="post-card">
            <div class="post-header">
                <div class="post-avatar">SA</div>
                <div class="post-user-info">
                    <p class="post-username">sarahartist</p>
                    <p class="post-time">5 hours ago</p>
                </div>
            </div>

            <img src="https://via.placeholder.com/600x400/fb923c/ffffff?text=Coffee+Time" 
                 alt="Post Image" 
                 class="post-image">

            <div class="post-content">
                <p class="post-caption">Morning coffee hits different when you're working on your passion projects. ☕✨</p>

                <div class="post-actions">
                    <button class="btn-action liked">
                        <span>♥</span>
                        <span>Liked</span>
                    </button>
                    <button class="btn-action">
                        <span>💬</span>
                        <span>Comment</span>
                    </button>
                </div>
            </div>
        </article>

        {{-- Post 3 --}}
        <article class="post-card">
            <div class="post-header">
                <div class="post-avatar">MT</div>
                <div class="post-user-info">
                    <p class="post-username">miketravel</p>
                    <p class="post-time">1 day ago</p>
                </div>
            </div>

            <img src="https://via.placeholder.com/600x400/f97316/ffffff?text=Mountain+Adventure" 
                 alt="Post Image" 
                 class="post-image">

            <div class="post-content">
                <p class="post-caption">Reached the summit after 6 hours of hiking. The view from up here makes every step worth it! 🏔️</p>

                <div class="post-actions">
                    <button class="btn-action">
                        <span>♥</span>
                        <span>Like</span>
                    </button>
                    <button class="btn-action">
                        <span>💬</span>
                        <span>Comment</span>
                    </button>
                </div>
            </div>
        </article>
    </div>
</body>
</html>