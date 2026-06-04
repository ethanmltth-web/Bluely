<?php
// Auth removed: local name only (stored in localStorage)
$emailRaw = 'guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App – Bluely</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css?v=20260605g">
</head>
<body>
  <div class="theme-bg-stack" id="theme-bg-stack" aria-hidden="true">
    <div class="wave-bg wave-bg-classic"></div>
    <div class="wave-bg wave-bg-dark"></div>
    <div class="wave-bg wave-bg-y2k"></div>
  </div>

  <div class="app-shell">
    <div class="app-content">
      <header class="app-header">
        <div class="app-logo">Bluely</div>
        <div class="app-header-center">
          <button type="button" class="app-welcome-name" id="app-name-btn" title="Click to change your name" aria-label="Welcome, click to change your name">
            Welcome <span class="app-welcome-name-value" id="app-name-display">your name</span>
          </button>
          <p class="app-local-clock" id="app-local-clock" aria-live="polite">
            <time class="app-local-time" id="app-local-time"></time>
          </p>
        </div>
        <nav class="app-nav app-stats-bar" aria-label="Bluely stats">
          <div class="app-stat-pill app-stat-pill--points" id="app-points-display" title="Points earned">
            <span class="app-stat-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="15" height="15"><path fill="currentColor" d="M12 2l2.2 6.8H21l-5.5 4 2.1 6.7L12 16.8 6.4 19.5l2.1-6.7L3 8.8h6.8L12 2z"/></svg>
            </span>
            <span class="app-stat-copy">
              <span class="app-stat-label">Points</span>
              <span class="app-stat-value" id="app-points-value">0</span>
            </span>
          </div>
          <div class="app-stat-pill app-stat-pill--shards" id="app-shards-display" title="Shards collected">
            <span class="app-stat-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="15" height="15"><path fill="currentColor" d="M12 3.5 6 9.2v5.6l6 5.7 6-5.7V9.2L12 3.5zm0 2.3 4.2 3.8v4.1L12 18.4 7.8 13.7V9.6L12 5.8z"/></svg>
            </span>
            <span class="app-stat-copy">
              <span class="app-stat-label">Shards</span>
              <span class="app-stat-value" id="app-shards-value">0</span>
            </span>
          </div>
          <div class="app-stat-pill app-stat-pill--streak" id="app-streak-display" title="Daily login streak">
            <span class="app-stat-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="15" height="15"><path fill="currentColor" d="M12 2c1.2 3.2-.2 5.4-1.6 7.2C8.8 11.2 7 13.4 7 16c0 2.8 2.2 5 5 5s5-2.2 5-5c0-2.6-1.8-4.8-3.4-6.8C12.2 7.4 10.8 5.2 12 2z"/></svg>
            </span>
            <span class="app-stat-copy">
              <span class="app-stat-label">Streak</span>
              <span class="app-stat-value" id="app-streak-value">0</span>
            </span>
          </div>
        </nav>
      </header>

      <nav class="app-top-nav app-sidebar-nav" aria-label="Main navigation">
        <button type="button" class="app-sidebar-item is-active" id="sidebar-main-btn">Main Menu</button>
        <button type="button" class="app-sidebar-item" id="sidebar-schedule-btn">Schedule</button>
        <button type="button" class="app-sidebar-item" id="sidebar-whiteboard-btn">Whiteboard</button>
        <button type="button" class="app-sidebar-item" id="sidebar-goals-btn">Goals</button>
        <button type="button" class="app-sidebar-item" id="sidebar-ai-btn">AI</button>
        <button type="button" class="app-sidebar-item" id="sidebar-customisation-btn">Customisation</button>
        <button type="button" class="app-sidebar-item" id="sidebar-focus-btn">Focus</button>
      </nav>

      <main class="app-main">
    <section id="apps-panel"
             class="app-panel app-panel-active main-menu-panel"
             role="region"
             aria-label="Main menu panel">
      <div class="main-menu-atmosphere" aria-hidden="true">
        <span class="main-menu-orb main-menu-orb--a"></span>
        <span class="main-menu-orb main-menu-orb--b"></span>
        <span class="main-menu-orb main-menu-orb--c"></span>
      </div>
      <div class="main-menu-layout">
      <header class="main-menu-hero">
        <p class="main-menu-eyebrow"><span class="main-menu-eyebrow-dot" aria-hidden="true"></span>Bluely</p>
        <h2 class="section-title main-menu-title">Main Menu</h2>
        <p class="main-menu-tagline">See what’s next, open your apps, and check in on the day</p>
      </header>
      <section class="upcoming-panel upcoming-panel--home main-menu-card" id="upcoming-panel" aria-labelledby="upcoming-title">
        <div class="upcoming-header">
          <div class="upcoming-header-main">
            <p class="upcoming-kicker">Next up</p>
            <h3 class="upcoming-title" id="upcoming-title">Upcoming</h3>
            <p class="upcoming-subtitle" id="upcoming-subtitle">Your next plans from Schedule</p>
          </div>
          <span class="upcoming-count" id="upcoming-count" hidden aria-label="Pending count">0</span>
        </div>
        <div class="upcoming-list-wrap" id="upcoming-list-wrap">
          <ul class="upcoming-list upcoming-list--home" id="upcoming-list"></ul>
        </div>
        <button type="button" class="upcoming-view-all-btn" id="upcoming-view-all-btn">
          <span class="upcoming-view-all-label">View all schedules</span>
          <span class="upcoming-view-all-arrow" aria-hidden="true">→</span>
        </button>
      </section>
      <div class="add-link-panel" id="add-link-panel">
        <form class="add-link-form" id="add-link-form">
          <label class="add-link-field">
            <span class="add-link-label">Link URL</span>
            <input type="url" id="link-url-input" class="add-link-input" placeholder="https://example.com" required>
          </label>
          <label class="add-link-field">
            <span class="add-link-label">Name (optional)</span>
            <input type="text" id="link-name-input" class="add-link-input" placeholder="Example">
          </label>
          <div class="add-link-actions">
            <button type="submit" class="add-link-save">Save link</button>
            <button type="button" class="add-link-cancel" id="add-link-cancel">Cancel</button>
          </div>
        </form>
      </div>
      <div class="main-menu-body">
        <section class="main-menu-apps main-menu-card" aria-labelledby="main-menu-apps-title">
          <div class="main-menu-apps-head">
            <div class="main-menu-apps-head-text">
              <p class="main-menu-section-kicker">Launcher</p>
              <h3 class="main-menu-apps-title" id="main-menu-apps-title">Your apps</h3>
              <p class="main-menu-apps-lead">Pinned links and folders</p>
            </div>
            <nav class="launcher-pager is-inactive" id="launcher-pager" aria-label="Launcher pages">
              <button type="button" class="launcher-pager-btn launcher-pager-btn--prev" id="launcher-pager-prev" aria-label="Previous page" disabled>
                <svg class="launcher-pager-icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M14.5 18.5 8 12l6.5-6.5 1.4 1.4L10.8 12l5.1 5.1-1.4 1.4z"/></svg>
              </button>
              <p class="launcher-pager-label">
                <span class="launcher-pager-label-text">Page</span>
                <span class="launcher-pager-numbers" aria-live="polite">
                  <span class="launcher-pager-current" id="launcher-pager-current">1</span>
                  <span class="launcher-pager-sep" aria-hidden="true">of</span>
                  <span class="launcher-pager-total" id="launcher-pager-total">1</span>
                </span>
              </p>
              <button type="button" class="launcher-pager-btn launcher-pager-btn--next" id="launcher-pager-next" aria-label="Next page">
                <svg class="launcher-pager-icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M9.5 18.5 16 12l-6.5-6.5-1.4 1.4L13.2 12l-5.1 5.1 1.4 1.4z"/></svg>
              </button>
            </nav>
            <div class="apps-toolbar main-menu-apps-toolbar" aria-label="Manage apps">
              <button type="button" class="add-link-btn add-link-btn-icon-only main-menu-tool-btn" id="add-link-btn" title="Add link" aria-label="Add link">+</button>
              <button type="button" class="add-link-btn add-link-btn-icon-only main-menu-tool-btn" id="make-folder-btn" title="Make folder" aria-label="Make folder">
                <svg class="toolbar-btn-icon" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path fill="#fff" d="M4 6h7l2 2h7v12H4V6zm2 2v10h12V10h-6.8L11.2 8H6z"/></svg>
              </button>
              <button type="button" class="add-link-btn add-link-btn-icon-only main-menu-tool-btn" id="edit-apps-btn" title="Edit apps" aria-label="Edit apps">
                <svg class="toolbar-btn-icon toolbar-btn-icon--edit" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 20h9M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/></svg>
              </button>
            </div>
          </div>
          <div class="main-menu-apps-stage">
            <div class="launcher-grid-viewport" id="launcher-grid-viewport">
              <div class="app-links-grid app-links-grid--launcher" id="app-links-grid"></div>
            </div>
          </div>
        </section>
        <aside class="main-menu-side">
          <section class="daily-motivation-panel main-menu-card" id="daily-motivation-panel" aria-labelledby="daily-motivation-title">
            <p class="main-menu-section-kicker main-menu-section-kicker--side">Today</p>
            <h3 class="daily-motivation-title" id="daily-motivation-title">Daily Motivation</h3>
            <blockquote class="daily-motivation-quote">
              <p class="daily-motivation-text" id="daily-motivation-text">Stay focused and keep going.</p>
            </blockquote>
            <div class="daily-quests" id="daily-quests">
              <h4 class="daily-quests-title">Daily Quests</h4>
              <ul class="daily-quests-list" id="daily-quests-list"></ul>
            </div>
          </section>
        </aside>
      </div>
      </div>
    </section>

    <section id="schedule-panel"
             class="app-panel app-panel-schedule"
             role="region"
             aria-label="Schedule panel" hidden>
      <div class="schedule-atmosphere" aria-hidden="true">
        <span class="schedule-orb schedule-orb--a"></span>
        <span class="schedule-orb schedule-orb--b"></span>
        <span class="schedule-orb schedule-orb--c"></span>
      </div>
      <div class="schedule-layout-wrap">
      <header class="schedule-page-head">
        <div class="schedule-page-head-text">
          <p class="schedule-page-kicker">Planner</p>
          <h2 class="section-title schedule-page-title">Schedule</h2>
          <p class="schedule-page-lead">Pick a day, add activities, and track what matters.</p>
        </div>
        <div class="schedule-now-card" id="schedule-now-card">
          <span class="schedule-now-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M12 6v6l4 2 1-1.7-3.2-5.3H12zm0-4a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm0 16a7 7 0 1 1 0-14 7 7 0 0 1 0 14z"/></svg>
          </span>
          <div class="schedule-now-copy">
            <span class="schedule-now-label">Today</span>
            <span class="schedule-now-date" id="schedule-today-date"></span>
            <time class="schedule-now-time" id="schedule-today-time"></time>
          </div>
        </div>
      </header>
      <div class="schedule-workspace">
      <div class="schedule-layout">
        <div class="schedule-calendar schedule-hub-card" id="schedule-calendar"></div>
        <div class="schedule-day-panel schedule-hub-card" id="schedule-day-panel">
        <div class="schedule-day-panel-header">
          <p class="schedule-day-kicker">Selected day</p>
          <h3 class="schedule-day-panel-title" id="schedule-day-panel-title">Select a date</h3>
          <p class="schedule-day-panel-subtitle" id="schedule-day-panel-subtitle">Click a day on the calendar to view or add plans.</p>
        </div>
        <div class="schedule-day-content">
          <section class="schedule-day-column-card schedule-day-column-card--list">
            <div class="schedule-column-head">
              <h4 class="schedule-column-title">Activities</h4>
              <span class="schedule-activity-count" id="schedule-activity-count" hidden>0</span>
            </div>
            <div class="schedule-day-activities-scroll">
              <ul class="schedule-day-activities" id="schedule-day-activities"></ul>
              <p class="schedule-day-empty" id="schedule-day-empty" hidden>No activities yet for this day.</p>
            </div>
          </section>
          <section class="schedule-day-column-card schedule-day-column-card--form">
            <p class="schedule-form-kicker">Add new</p>
            <h4 class="schedule-column-title">New activity</h4>
            <form class="schedule-day-add-form" id="schedule-day-add-form">
              <div class="schedule-day-form-row schedule-day-form-row--name">
                <label class="schedule-day-field schedule-day-field--full">
                  <span>Activity name</span>
                  <input type="text" id="activity-name" class="add-link-input" placeholder="e.g. Meeting" required>
                </label>
              </div>
              <div class="schedule-day-field schedule-day-color-field">
                <span class="schedule-day-field-label">Color</span>
                <div class="schedule-color-swatches" id="schedule-color-swatches" role="list">
                  <button type="button" class="schedule-color-swatch" data-color="#1e293b" style="--swatch:#1e293b" title="Ink" aria-label="Ink"></button>
                  <button type="button" class="schedule-color-swatch is-active" data-color="#6b9aed" style="--swatch:#6b9aed" title="Blue" aria-label="Blue"></button>
                  <button type="button" class="schedule-color-swatch" data-color="#dc2626" style="--swatch:#dc2626" title="Red" aria-label="Red"></button>
                  <button type="button" class="schedule-color-swatch" data-color="#16a34a" style="--swatch:#16a34a" title="Green" aria-label="Green"></button>
                  <button type="button" class="schedule-color-swatch" data-color="#d97706" style="--swatch:#d97706" title="Orange" aria-label="Orange"></button>
                  <button type="button" class="schedule-color-swatch" data-color="#9333ea" style="--swatch:#9333ea" title="Purple" aria-label="Purple"></button>
                </div>
                <input type="hidden" id="activity-color" value="#6b9aed">
              </div>
              <div class="schedule-day-form-row schedule-day-times">
                <label class="schedule-day-field">
                  <span>Start</span>
                  <div class="schedule-day-time">
                    <input type="text" id="activity-start-time" class="schedule-day-time-input" placeholder="9:30" inputmode="numeric" maxlength="5" autocomplete="off">
                    <select id="activity-start-ampm" class="schedule-day-select schedule-day-ampm">
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                  </div>
                </label>
                <label class="schedule-day-field schedule-day-field--priority">
                  <span>Priority (optional)</span>
                  <div id="schedule-form-priority-mount" class="schedule-form-priority-mount"></div>
                  <input type="hidden" id="activity-priority" value="none">
                </label>
              </div>
              <button type="submit" class="add-link-btn schedule-add-activity-btn">Add activity</button>
            </form>
          </section>
        </div>
      </div>
      </div>
      </div>
      </div>
    </section>
    <section id="all-schedules-panel"
             class="app-panel app-panel-all-schedules"
             role="tabpanel"
             aria-label="All schedules panel" hidden>
      <div class="all-schedules-atmosphere" aria-hidden="true">
        <span class="all-schedules-orb all-schedules-orb--a"></span>
        <span class="all-schedules-orb all-schedules-orb--b"></span>
        <span class="all-schedules-orb all-schedules-orb--c"></span>
      </div>
      <div class="all-schedules-layout">
      <header class="all-schedules-page-head">
        <button type="button" class="all-schedules-back-btn" id="all-schedules-back-btn">
          <span class="all-schedules-back-arrow" aria-hidden="true">←</span>
          <span>Main Menu</span>
        </button>
        <div class="all-schedules-head-text">
          <p class="all-schedules-kicker">Schedule</p>
          <h2 class="section-title all-schedules-title">All schedules</h2>
          <p class="all-schedules-lead" id="all-schedules-lead">Manage every activity across your calendar.</p>
        </div>
      </header>
      <div class="all-schedules-panel-card all-schedules-hub-card">
        <div class="all-schedules-stats" id="all-schedules-stats" aria-live="polite"></div>
        <div class="all-schedules-toolbar">
          <label class="all-schedules-search-wrap">
            <span class="visually-hidden">Search activities</span>
            <span class="all-schedules-search-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Zm0-2a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Zm7.78 2.22-4.2-4.2 1.42-1.42 4.2 4.2-1.42 1.42Z"/></svg>
            </span>
            <input type="search" id="all-schedules-search" class="all-schedules-search add-link-input" placeholder="Search by name…" autocomplete="off">
          </label>
          <div class="all-schedules-toolbar-row">
            <div class="all-schedules-picker" data-picker="date" id="all-schedules-date-picker">
              <button type="button" class="all-schedules-picker-trigger" id="all-schedules-date-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="all-schedules-date-menu">
                <span class="all-schedules-picker-kicker">Day</span>
                <span class="all-schedules-picker-value" id="all-schedules-date-value">All days</span>
                <span class="all-schedules-picker-chevron" aria-hidden="true">▾</span>
              </button>
              <div class="all-schedules-picker-menu" id="all-schedules-date-menu" role="listbox" aria-label="Filter by day" hidden></div>
            </div>
            <div class="all-schedules-picker" data-picker="sort" id="all-schedules-sort-picker">
              <button type="button" class="all-schedules-picker-trigger" id="all-schedules-sort-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="all-schedules-sort-menu">
                <span class="all-schedules-picker-kicker">Sort</span>
                <span class="all-schedules-picker-value" id="all-schedules-sort-value">Smart sort</span>
                <span class="all-schedules-picker-chevron" aria-hidden="true">▾</span>
              </button>
              <div class="all-schedules-picker-menu picker-menu--scroll-3" id="all-schedules-sort-menu" role="listbox" aria-label="Sort order" hidden>
                <button type="button" class="all-schedules-picker-option is-selected" role="option" aria-selected="true" data-picker-value="smart">
                  <span class="all-schedules-picker-option-label">Smart sort</span>
                  <span class="all-schedules-picker-option-hint">Overdue and soonest first</span>
                </button>
                <button type="button" class="all-schedules-picker-option" role="option" aria-selected="false" data-picker-value="priority">
                  <span class="all-schedules-picker-option-label">Priority first</span>
                  <span class="all-schedules-picker-option-hint">High priority at the top</span>
                </button>
                <button type="button" class="all-schedules-picker-option" role="option" aria-selected="false" data-picker-value="time">
                  <span class="all-schedules-picker-option-label">Time first</span>
                  <span class="all-schedules-picker-option-hint">Earliest start time first</span>
                </button>
              </div>
            </div>
          </div>
          <div class="all-schedules-filter-chips" role="group" aria-label="Status filter">
            <button type="button" class="all-schedules-chip is-active" data-status-filter="all">All</button>
            <button type="button" class="all-schedules-chip" data-status-filter="active">Active</button>
            <button type="button" class="all-schedules-chip" data-status-filter="overdue">Overdue</button>
            <button type="button" class="all-schedules-chip" data-status-filter="in_progress">In progress</button>
            <button type="button" class="all-schedules-chip" data-status-filter="done">Done</button>
          </div>
        </div>
        <div class="all-schedules-list-wrap">
          <ul class="upcoming-list all-schedules-list" id="all-schedules-list"></ul>
        </div>
      </div>
      </div>
    </section>
    <section id="tidal-store-panel"
             class="app-panel"
             role="tabpanel"
             aria-label="Bluely Store panel" hidden>
      <h2 class="section-title">Bluely Store</h2>
      <div class="all-schedules-panel-card">
        <button type="button" class="plinko-back-btn" id="tidal-store-back-btn">← Back to Apps</button>
        <div class="tidal-store-header">
          <h3 class="games-panel-title">Apps</h3>
          <div class="tidal-store-search-row">
            <input type="text" id="tidal-store-search" class="add-link-input tidal-store-search" placeholder="Search apps...">
            <button type="button" class="plinko-back-btn" id="tidal-store-all-apps-btn">All apps</button>
          </div>
        </div>
        <section class="tidal-store-section" id="tidal-store-useful-section">
          <h4 class="schedule-column-title">Useful Tools</h4>
          <div class="tidal-store-grid" id="tidal-store-useful-grid"></div>
        </section>
        <section class="tidal-store-section" id="tidal-store-discover-section">
          <h4 class="schedule-column-title">Discover more</h4>
          <div class="tidal-store-grid" id="tidal-store-discover-grid"></div>
        </section>
        <section class="tidal-store-section" id="tidal-store-all-section" hidden>
          <h4 class="schedule-column-title">All apps</h4>
          <div class="tidal-store-grid" id="tidal-store-all-grid"></div>
        </section>
      </div>
    </section>
    <section id="whiteboard-panel"
             class="app-panel app-panel-whiteboard"
             role="tabpanel"
             aria-label="Whiteboard panel" hidden>
      <div class="whiteboard-embed-wrap">
        <iframe src="whiteboard.html" class="whiteboard-embed-frame" title="Whiteboard"></iframe>
      </div>
    </section>
    <section id="goals-panel"
             class="app-panel app-panel-goals"
             role="tabpanel"
             aria-label="Goals panel" hidden>
      <div class="goals-page-head">
        <h2 class="section-title">Goals</h2>
        <p class="goals-page-lead">Set targets and get a gentle reminder each time you open Bluely.</p>
      </div>
      <div class="goals-panel-card main-menu-card">
        <form class="goals-add-form" id="goals-add-form">
          <label class="goals-field">
            <span class="goals-field-label">Goal</span>
            <input type="text" id="goal-title-input" class="add-link-input" placeholder="e.g. Finish history essay" maxlength="120" required>
          </label>
          <label class="goals-field">
            <span class="goals-field-label">Notes (optional)</span>
            <input type="text" id="goal-notes-input" class="add-link-input" placeholder="Why it matters or next step" maxlength="200">
          </label>
          <label class="goals-field goals-field--inline">
            <span class="goals-field-label">Target date (optional)</span>
            <input type="date" id="goal-date-input" class="add-link-input goals-date-input">
          </label>
          <label class="goals-check">
            <input type="checkbox" id="goal-remind-login" checked>
            <span>Remind me on login</span>
          </label>
          <button type="submit" class="add-link-btn goals-add-btn">Add goal</button>
        </form>
        <div class="goals-list-wrap">
          <h3 class="goals-list-title">Your goals</h3>
          <ul class="goals-list" id="goals-list"></ul>
          <p class="goals-empty" id="goals-empty" hidden>No goals yet — add one above.</p>
        </div>
      </div>
    </section>
    <section id="ai-panel"
             class="app-panel app-panel-ai"
             role="tabpanel"
             aria-label="AI assistant panel" hidden>
      <div class="ai-panel-layout">
        <div class="ai-panel-bg" aria-hidden="true"></div>
        <div class="ai-panel-main">
        <div class="ai-shell">
          <div class="ai-shell-top">
            <button type="button" class="ai-settings-toggle" id="ai-settings-toggle" aria-expanded="false" aria-controls="ai-settings-drawer" title="Chat options">
              <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="currentColor" d="M19.14 12.94c.04-.31.06-.63.06-.94s-.02-.63-.06-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.49.49 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6A3.6 3.6 0 1 1 12 8.4a3.6 3.6 0 0 1 0 7.2z"/></svg>
            </button>
            <h3 class="ai-shell-greeting">What can I help you with today?</h3>
            <p class="ai-shell-sub">Your Bluely assistant powered by Ollama</p>
            <form class="ai-shell-form" id="ai-composer-form">
              <div class="welcome-screen-input-wrap">
                <div class="welcome-screen-field">
                  <input type="text" class="welcome-screen-input" id="ai-composer-input" placeholder="Ask about planning, focus, or your schedule…" maxlength="2000" autocomplete="off" aria-label="Message to AI">
                  <button type="submit" class="welcome-screen-enter-btn" id="ai-composer-send" aria-label="Send message">
                    <svg class="welcome-screen-enter-icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="ai-shell-chat" id="ai-shell-chat">
            <div class="ai-chat-log" id="ai-chat-log" role="log" aria-live="polite" aria-relevant="additions"></div>
            <div class="ai-chat-empty" id="ai-chat-empty">
              <p class="ai-chat-empty-lead">Try asking about:</p>
              <div class="ai-chat-suggestions" id="ai-chat-suggestions">
                <button type="button" class="ai-suggestion-chip" data-prompt="What should I focus on today based on my schedule?">Today's focus</button>
                <button type="button" class="ai-suggestion-chip" data-prompt="Help me plan tomorrow morning productively.">Plan tomorrow</button>
                <button type="button" class="ai-suggestion-chip" data-prompt="Give me a short motivational tip to stay on track.">Motivation</button>
                <button type="button" class="ai-suggestion-chip" data-prompt="How can I break a big task into smaller steps?">Break down tasks</button>
              </div>
            </div>
          </div>
          <p class="ai-chat-status" id="ai-chat-status" hidden></p>
          <div class="ai-settings-drawer" id="ai-settings-drawer" hidden>
            <div class="ai-settings-section ai-settings-section--memory">
              <p class="ai-settings-hint">Bluely uses this in every reply. Saved on this device only.</p>
              <label class="ai-settings-field">
                <span class="ai-settings-label">Habits</span>
                <textarea id="ai-memory-habits" class="ai-memory-input" rows="2" placeholder="e.g. Morning coffee, plans day on Sunday, prefers short focus blocks" maxlength="500"></textarea>
              </label>
              <label class="ai-settings-field">
                <span class="ai-settings-label">Likes & preferences</span>
                <textarea id="ai-memory-likes" class="ai-memory-input" rows="2" placeholder="e.g. Likes calm music, dislikes back-to-back meetings" maxlength="500"></textarea>
              </label>
              <label class="ai-settings-field">
                <span class="ai-settings-label">Hobbies</span>
                <textarea id="ai-memory-hobbies" class="ai-memory-input" rows="2" placeholder="e.g. Guitar, hiking, cooking" maxlength="500"></textarea>
              </label>
              <button type="button" class="ai-settings-btn ai-settings-btn--save-key" id="ai-save-memory-btn">Save memory</button>
            </div>
            <div class="ai-settings-section ai-settings-section--chat">
              <p class="ai-settings-hint">Chat clears when you log in. Restore your last session or start a new conversation.</p>
              <div class="ai-settings-actions">
                <button type="button" class="ai-settings-btn" id="ai-restore-chat-btn">Bring back previous chat</button>
                <button type="button" class="ai-settings-btn ai-settings-btn--ghost" id="ai-new-chat-btn">New chat</button>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="ai-next-day-plan-side-btn" id="ai-next-day-plan-side-btn" title="View your next day plan" aria-haspopup="dialog" aria-controls="ai-next-day-plan-overlay">
          <span class="ai-next-day-plan-side-btn-label">Next day plan</span>
        </button>
        </div>
      </div>
    </section>
    <section id="customisation-panel"
             class="app-panel"
             role="tabpanel"
             aria-label="Customisation panel" hidden>
      <h2 class="section-title">Customisation</h2>
      <div class="customisation-card">
        <h3 class="customisation-title">Styles</h3>
        <div class="customisation-style-list">
          <button type="button" class="custom-style-btn is-active" data-theme="ocean">Classic</button>
          <button type="button" class="custom-style-btn" data-theme="dark" data-style-label="Dark Mode">Dark Mode</button>
          <button type="button" class="custom-style-btn is-locked" data-theme="y2k" data-style-label="Y2K Gold">Y2K Gold</button>
        </div>
      </div>
    </section>
  </main>
    </div>
  </div>

  <div class="page-transition" id="page-transition" aria-hidden="true">
    <div class="page-transition-veil" aria-hidden="true"></div>
    <div class="page-transition-shimmer" aria-hidden="true"></div>
  </div>

  <div class="welcome-screen" id="welcome-screen" aria-hidden="true">
    <div class="welcome-screen-backdrop" aria-hidden="true"></div>
    <div class="welcome-screen-inner">
      <h1 class="welcome-screen-greeting" id="welcome-screen-greeting">Hi, What's your name?</h1>
      <form class="welcome-screen-form" id="welcome-screen-form">
        <div class="welcome-screen-input-wrap">
          <div class="welcome-screen-field">
            <input type="text" class="welcome-screen-input" id="welcome-screen-input" placeholder="Your name" maxlength="30" autocomplete="name" aria-label="Your name">
            <button type="submit" class="welcome-screen-enter-btn" id="welcome-screen-enter-btn" aria-label="Enter">
              <svg class="welcome-screen-enter-icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
                <path fill="currentColor" d="M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7h-2z"/>
              </svg>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="schedule-complete-overlay" id="schedule-complete-overlay" aria-hidden="true">
    <div class="schedule-complete-card">
      <h3>Well done!</h3>
      <p id="schedule-complete-text">You completed one of your schedules.</p>
    </div>
  </div>

  <div class="goal-reminder-stack app-toast-stack" id="goal-reminder-stack" aria-live="polite"></div>

  <div class="streak-login-overlay" id="streak-login-overlay" aria-hidden="true">
    <div class="streak-login-card">
      <h3 id="streak-login-title">🔥 Your 1 day streak! Well done!</h3>
    </div>
  </div>

  <div class="focus-mode-overlay" id="focus-mode-overlay" aria-hidden="true">
    <div class="focus-mode-card">
      <p class="focus-mode-kicker" id="focus-mode-kicker">Focus Mode</p>
      <h3 class="focus-mode-title" id="focus-mode-title">No task selected</h3>
      <div class="focus-mode-ring-wrap">
        <div class="focus-mode-ring" id="focus-mode-ring" style="--focus-progress: 0;"></div>
        <p class="focus-mode-time" id="focus-mode-time">00:00:00</p>
      </div>
      <div class="focus-mode-timer-setup">
        <label for="focus-mode-minutes-input" class="focus-mode-minutes-label">Timer (minutes)</label>
        <input type="number" min="1" max="720" step="1" id="focus-mode-minutes-input" class="add-link-input focus-mode-minutes-input" placeholder="25">
        <button type="button" class="add-link-btn" id="focus-mode-start-timer-btn">Set timer</button>
      </div>
      <div class="focus-mode-actions">
        <button type="button" class="add-link-btn" id="focus-mode-toggle-btn">Pause</button>
        <button type="button" class="upcoming-status-btn" id="focus-mode-done-btn">Mark done</button>
        <button type="button" class="upcoming-delete-btn" id="focus-mode-exit-btn">Exit focus</button>
      </div>
      <div class="focus-mode-bottom-actions">
        <button type="button" class="plinko-back-btn" id="focus-mode-back-stopwatch-btn" hidden>Back to Stopwatch</button>
      </div>
    </div>
  </div>

  <div class="app-edit-overlay" id="app-edit-overlay" aria-hidden="true">
    <div class="app-edit-card">
      <h3 class="app-edit-title" id="app-edit-title">Edit app</h3>
      <p class="app-edit-subtitle" id="app-edit-subtitle"></p>
      <div class="app-edit-actions">
        <button type="button" class="add-link-btn" id="app-edit-rename-btn">Rename app</button>
        <button type="button" class="add-link-btn add-link-btn-danger" id="app-edit-delete-btn">Delete app</button>
        <button type="button" class="plinko-back-btn" id="app-edit-cancel-btn">Cancel</button>
      </div>
      <div class="app-edit-rename-row" id="app-edit-rename-row" hidden>
        <input type="text" class="add-link-input" id="app-edit-rename-input" placeholder="New name">
        <button type="button" class="add-link-btn" id="app-edit-save-rename-btn">Save name</button>
      </div>
    </div>
  </div>

  <div class="folder-view-overlay" id="folder-view-overlay" aria-hidden="true">
    <div class="folder-view-card">
      <div class="folder-view-header">
        <h3 class="folder-view-title" id="folder-view-title">Folder</h3>
        <button type="button" class="plinko-back-btn" id="folder-view-close-btn">Close</button>
      </div>
      <ul class="folder-view-list" id="folder-view-list"></ul>
    </div>
  </div>

  <div class="bluely-mail-overlay" id="bluely-mail-overlay" aria-hidden="true">
    <div class="bluely-mail-card">
      <div class="bluely-mail-header">
        <div class="bluely-mail-brand">
          <span class="bluely-mail-brand-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
          </span>
          <div class="bluely-mail-header-main">
            <h3 class="bluely-mail-title">Bluely Mail</h3>
            <p class="bluely-mail-subtitle" id="bluely-mail-subtitle">Your notifications</p>
          </div>
        </div>
        <button type="button" class="bluely-mail-close-btn" id="bluely-mail-close-btn" aria-label="Close Bluely Mail">×</button>
      </div>
      <ul class="bluely-mail-list" id="bluely-mail-list"></ul>
    </div>
  </div>

  <div class="style-purchase-overlay" id="style-purchase-overlay" aria-hidden="true">
    <div class="style-purchase-card">
      <h3 class="style-purchase-title" id="style-purchase-title">Do you want to buy Dark Mode?</h3>
      <p class="style-purchase-cost" id="style-purchase-cost">30 points or 3 shards</p>
      <p class="style-purchase-error" id="style-purchase-error" hidden></p>
      <div class="style-purchase-actions">
        <button type="button" class="add-link-btn" id="style-purchase-points-btn">Buy with points</button>
        <button type="button" class="add-link-btn" id="style-purchase-shards-btn">Buy with shards</button>
        <button type="button" class="plinko-back-btn" id="style-purchase-cancel-btn">Not now</button>
      </div>
    </div>
  </div>

  <div class="ai-next-day-plan-overlay" id="ai-next-day-plan-overlay" aria-hidden="true" role="dialog" aria-labelledby="ai-next-day-plan-title" aria-modal="true">
    <div class="ai-next-day-plan-card">
      <div class="ai-next-day-plan-header">
        <h3 class="ai-next-day-plan-title" id="ai-next-day-plan-title">Next day plan</h3>
        <button type="button" class="ai-next-day-plan-close-btn" id="ai-next-day-plan-close-btn" aria-label="Close next day plan">×</button>
      </div>
      <p class="ai-next-day-plan-hint" id="ai-next-day-plan-hint">Clears automatically at 11:50 PM in your local time.</p>
      <div class="ai-next-day-plan-body" id="ai-next-day-plan-body"></div>
      <button type="button" class="plinko-back-btn ai-next-day-plan-dismiss-btn" id="ai-next-day-plan-dismiss-btn">Close</button>
    </div>
  </div>

  <div class="ai-next-day-plan-confirm-overlay" id="ai-next-day-plan-confirm-overlay" aria-hidden="true" role="alertdialog" aria-labelledby="ai-next-day-plan-confirm-title" aria-modal="true">
    <div class="ai-next-day-plan-confirm-card">
      <h3 class="ai-next-day-plan-confirm-title" id="ai-next-day-plan-confirm-title">Replace next day plan?</h3>
      <p class="ai-next-day-plan-confirm-text" id="ai-next-day-plan-confirm-text">This will delete your last next day plan and use the new message instead.</p>
      <div class="ai-next-day-plan-confirm-actions">
        <button type="button" class="add-link-btn" id="ai-next-day-plan-confirm-btn">Confirm</button>
        <button type="button" class="plinko-back-btn" id="ai-next-day-plan-cancel-btn">Cancel</button>
      </div>
    </div>
  </div>

  <div class="store-app-overlay" id="store-app-overlay" aria-hidden="true">
    <div class="store-app-card">
      <button type="button" class="plinko-back-btn store-app-close-btn" id="store-app-close-btn">Close</button>
      <div class="store-app-main">
        <div class="store-app-content">
          <h3 class="store-app-title" id="store-app-title">App</h3>
          <p class="store-app-description" id="store-app-description"></p>
          <button type="button" class="add-link-btn" id="store-app-add-btn">Add to Menu</button>
        </div>
        <img class="store-app-logo" id="store-app-logo" alt="">
      </div>
    </div>
  </div>

  <script>
    (function () {
      var panels = document.querySelectorAll('.app-panel');
      var transitionEl = document.getElementById('page-transition');
      var transitionLock = false;
      var DISPLAY_NAME_KEY = 'tidal_organiser_display_name';
      var CITY_STORAGE_KEY = 'tidal_organiser_city';
      var TIMEZONE_STORAGE_KEY = 'tidal_organiser_timezone';
      var localClockEl = document.getElementById('app-local-clock');
      var localTimeEl = document.getElementById('app-local-time');
      var localClockTimer = null;
      var welcomeScreen = document.getElementById('welcome-screen');
      var welcomeGreeting = document.getElementById('welcome-screen-greeting');
      var welcomeForm = document.getElementById('welcome-screen-form');
      var welcomeInput = document.getElementById('welcome-screen-input');
      var welcomeDismissTimer = null;
      var welcomeIsEditMode = false;
      var welcomeSequenceActive = false;
      var WELCOME_FADE_MS = 550;
      var WELCOME_NICE_MS = 1000;
      var WELCOME_BG_DELAY_MS = 400;
      var WELCOME_BG_FADE_MS = 650;
      var nameBtn = document.getElementById('app-name-btn');

      var PANEL_EXIT_MS = 360;
      var PANEL_ENTER_MS = 520;
      var PAGE_TRANSITION_SWAP_MS = 420;
      var PAGE_TRANSITION_TOTAL_MS = 980;

      function playPageTransition(onDone) {
        if (!transitionEl || transitionLock) {
          if (typeof onDone === 'function') onDone();
          return;
        }
        transitionLock = true;
        transitionEl.classList.add('is-active');
        transitionEl.setAttribute('aria-hidden', 'false');
        setTimeout(function () {
          if (typeof onDone === 'function') onDone();
        }, PAGE_TRANSITION_SWAP_MS);
        setTimeout(function () {
          transitionEl.classList.remove('is-active');
          transitionEl.setAttribute('aria-hidden', 'true');
          transitionLock = false;
        }, PAGE_TRANSITION_TOTAL_MS);
      }

      function scrollAppMainToTop(smooth) {
        var appMain = document.querySelector('.app-main');
        if (!appMain) return;
        try {
          appMain.scrollTo({ top: 0, behavior: smooth ? 'smooth' : 'auto' });
        } catch (e) {
          appMain.scrollTop = 0;
        }
      }

      function setActivePanel(target, options) {
        options = options || {};
        var panelChanged = target !== currentPanelTarget;
        var skipPanelAnim = !!options.skipPanelAnim;
        var panelId = target === 'apps'
          ? 'apps-panel'
          : (target === 'schedule'
            ? 'schedule-panel'
            : (target === 'all_schedules'
              ? 'all-schedules-panel'
              : (target === 'tidal_store'
                ? 'tidal-store-panel'
                : (target === 'whiteboard'
                  ? 'whiteboard-panel'
                  : (target === 'goals'
                    ? 'goals-panel'
                    : (target === 'ai'
                      ? 'ai-panel'
                      : 'customisation-panel'))))));
        var activePanel = document.querySelector('.app-panel.app-panel-active');
        var panelEl = document.getElementById(panelId);

        function showPanel() {
          panels.forEach(function (p) {
            if (p === panelEl) return;
            p.classList.remove('app-panel-active', 'app-panel-enter', 'app-panel-exit', 'app-panel-fade-in', 'app-panel-fade-out');
            p.hidden = true;
          });
          if (!panelEl) return;
          panelEl.hidden = false;
          panelEl.classList.remove('app-panel-exit', 'app-panel-fade-out');
          panelEl.classList.add('app-panel-active');
          if (!skipPanelAnim) {
            panelEl.classList.add('app-panel-enter');
            void panelEl.offsetWidth;
            requestAnimationFrame(function () {
              requestAnimationFrame(function () {
                panelEl.classList.remove('app-panel-enter');
              });
            });
          } else {
            panelEl.classList.remove('app-panel-enter');
          }
        }

        function afterPanelSwap() {
          showPanel();
          if (panelChanged) scrollAppMainToTop(true);
          finishPanelSwap();
        }

        function finishPanelSwap() {
        if (target === 'schedule') {
          renderScheduleCalendar();
          ensureScheduleDaySelected();
        }
        if (target === 'apps') renderUpcomingSchedules();
        if (target === 'all_schedules') renderAllSchedules();
        if (target === 'tidal_store') renderTidalStore();
        if (target === 'goals') renderGoals();
        if (target === 'ai') renderAiChat();
        var mainBtn = document.getElementById('sidebar-main-btn');
        if (mainBtn) mainBtn.classList.toggle('is-active', target === 'apps' || target === 'tidal_store');
        var scheduleBtn = document.getElementById('sidebar-schedule-btn');
        if (scheduleBtn) scheduleBtn.classList.toggle('is-active', target === 'schedule');
        var whiteboardBtn = document.getElementById('sidebar-whiteboard-btn');
        if (whiteboardBtn) whiteboardBtn.classList.toggle('is-active', target === 'whiteboard');
        var goalsBtn = document.getElementById('sidebar-goals-btn');
        if (goalsBtn) goalsBtn.classList.toggle('is-active', target === 'goals');
        var aiBtn = document.getElementById('sidebar-ai-btn');
        if (aiBtn) aiBtn.classList.toggle('is-active', target === 'ai');
        var customisationBtn = document.getElementById('sidebar-customisation-btn');
        if (customisationBtn) customisationBtn.classList.toggle('is-active', target === 'customisation');
        currentPanelTarget = target;
        }

        if (activePanel && activePanel.id !== panelId && !skipPanelAnim) {
          activePanel.classList.remove('app-panel-enter', 'app-panel-fade-in');
          activePanel.classList.add('app-panel-exit');
          setTimeout(function () {
            activePanel.classList.remove('app-panel-active', 'app-panel-exit', 'app-panel-fade-out');
            activePanel.hidden = true;
            afterPanelSwap();
          }, PANEL_EXIT_MS);
        } else {
          afterPanelSwap();
        }
      }

      // Apps: link storage and UI
      var USER_STORAGE_SUFFIX = 'guest';
      var STORAGE_KEY = 'tidal_organiser_app_links:' + USER_STORAGE_SUFFIX;
      var LEGACY_APPS_STORAGE_KEY = 'tidal_organiser_app_links';
      var LEGACY_POINTS_STORAGE_KEY = 'tidal_organiser_points';
      var LEGACY_OWNER_STORAGE_KEY = 'tidal_organiser_legacy_owner';
      var LEGACY_MIGRATED_STORAGE_KEY = 'tidal_organiser_legacy_migrated:' + USER_STORAGE_SUFFIX;
      var appEditMode = false;
      var draggedLinkId = null;
      var appEditTargetId = null;
      var currentFolderViewId = null;
      var LAUNCHER_ITEMS_PER_PAGE = 10;
      var LAUNCHER_PAGE_STORAGE_KEY = 'tidal_organiser_launcher_page:' + USER_STORAGE_SUFFIX;
      var launcherPageIndex = 0;
      var lastLauncherRenderedPage = -1;
      var launcherPageDirection = 0;
      var LAUNCHER_PAGE_TRANSITION_MS = 300;

      function generateLibraryItemId() {
        return 'item_' + Date.now().toString(36) + '_' + Math.random().toString(36).slice(2, 8);
      }

      function getFolderCount(links) {
        return (links || []).filter(function (item) { return item.type === 'folder'; }).length;
      }

      function normalizeComparableUrl(url) {
        if (!url || typeof url !== 'string') return '';
        var cleaned = url.trim().toLowerCase();
        while (cleaned.length > 1 && cleaned.endsWith('/')) cleaned = cleaned.slice(0, -1);
        return cleaned;
      }

      function isBluelyStoreLink(item) {
        if (!item || item.type !== 'link') return false;
        var u = normalizeComparableUrl(item.url);
        return u === normalizeComparableUrl('tidal://store') || u === normalizeComparableUrl('bluely://store');
      }

      function isTidalStoreLink(item) {
        return isBluelyStoreLink(item);
      }

      function isBluelyMailLink(item) {
        return !!(item && item.type === 'link' && normalizeComparableUrl(item.url) === normalizeComparableUrl('bluely://mail'));
      }

      function isProtectedAppLink(item) {
        return isBluelyStoreLink(item) || isBluelyMailLink(item);
      }

      function normalizeLinkItem(item) {
        var obj = item && typeof item === 'object' ? Object.assign({}, item) : {};
        if (!obj.id) obj.id = generateLibraryItemId();
        obj.type = obj.type === 'folder' ? 'folder' : 'link';
        obj.folderId = typeof obj.folderId === 'string' && obj.folderId ? obj.folderId : null;
        if (obj.type === 'folder') {
          obj.url = null;
          if (!obj.name || typeof obj.name !== 'string') obj.name = 'Folder';
        } else {
          if (!obj.url || typeof obj.url !== 'string') obj.url = 'https://example.com';
          if (!obj.name || typeof obj.name !== 'string') obj.name = getDomain(obj.url);
          if (isBluelyStoreLink(obj)) {
            obj.folderId = null;
            obj.name = 'Bluely Store';
            obj.url = 'bluely://store';
          }
          if (isBluelyMailLink(obj)) {
            obj.folderId = null;
            obj.name = 'Bluely Mail';
            obj.url = 'bluely://mail';
          }
        }
        return obj;
      }

      function getLinks() {
        try {
          var raw = localStorage.getItem(STORAGE_KEY);
          var parsed = raw ? JSON.parse(raw) : [];
          if (!Array.isArray(parsed)) return [];
          var changed = false;
          var normalized = parsed.map(function (item) {
            var n = normalizeLinkItem(item);
            if (!item || !item.id || !item.type || typeof item.folderId === 'undefined') changed = true;
            if ((isBluelyStoreLink(n) || isBluelyMailLink(n)) && item && (item.folderId !== n.folderId || item.name !== n.name || item.url !== n.url)) changed = true;
            return n;
          });
          if (changed) localStorage.setItem(STORAGE_KEY, JSON.stringify(normalized));
          return normalized;
        } catch (e) {
          return [];
        }
      }

      function saveLinks(links) {
        var normalized = (Array.isArray(links) ? links : []).map(normalizeLinkItem);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(normalized));
      }

      function getPresetUrlMap() {
        var map = {};
        PRESET_APPS.forEach(function (preset) {
          map[normalizeComparableUrl(preset.url)] = true;
        });
        return map;
      }

      function getCustomAppCount(links) {
        var presetMap = getPresetUrlMap();
        return (links || []).reduce(function (count, item) {
          if (!item) return count;
          if (item.type === 'folder') return count + 1;
          if (item.type === 'link' && !presetMap[normalizeComparableUrl(item.url)]) return count + 1;
          return count;
        }, 0);
      }

      function maybeMigrateLegacyAccountData() {
        try {
          if (localStorage.getItem(LEGACY_MIGRATED_STORAGE_KEY) === '1') return;
          var owner = localStorage.getItem(LEGACY_OWNER_STORAGE_KEY);
          var legacyRaw = localStorage.getItem(LEGACY_APPS_STORAGE_KEY);
          var legacyParsed = legacyRaw ? JSON.parse(legacyRaw) : [];
          var legacyLinks = Array.isArray(legacyParsed) ? legacyParsed.map(normalizeLinkItem) : [];
          if (!legacyLinks.length) return;

          var currentLinks = getLinks();
          var shouldAutoClaim = !owner &&
            getCustomAppCount(currentLinks) === 0 &&
            getCustomAppCount(legacyLinks) > 0;
          var canMigrate = owner === USER_STORAGE_SUFFIX || shouldAutoClaim;
          if (!canMigrate) return;
          if (!owner) localStorage.setItem(LEGACY_OWNER_STORAGE_KEY, USER_STORAGE_SUFFIX);

          var seenUrls = {};
          var seenIds = {};
          currentLinks.forEach(function (item) {
            seenIds[item.id] = true;
            if (item.type !== 'link') return;
            seenUrls[normalizeComparableUrl(item.url)] = true;
          });
          var merged = currentLinks.slice();
          legacyLinks.forEach(function (item) {
            if (seenIds[item.id]) return;
            if (item.type === 'link') {
              var key = normalizeComparableUrl(item.url);
              if (key && seenUrls[key]) return;
              seenUrls[key] = true;
            }
            item.folderId = null;
            seenIds[item.id] = true;
            merged.push(item);
          });
          saveLinks(merged);

          var currentPointsRaw = localStorage.getItem(POINTS_STORAGE_KEY);
          var legacyPointsRaw = localStorage.getItem(LEGACY_POINTS_STORAGE_KEY);
          var legacyPoints = legacyPointsRaw !== null ? parseInt(legacyPointsRaw, 10) : NaN;
          if ((currentPointsRaw === null || currentPointsRaw === '') && !isNaN(legacyPoints)) {
            localStorage.setItem(POINTS_STORAGE_KEY, String(Math.max(0, legacyPoints)));
          }
          localStorage.setItem(LEGACY_MIGRATED_STORAGE_KEY, '1');
        } catch (e) {}
      }

      function ensurePresetApps() {
        try {
          var links = getLinks();
          var existingMap = {};
          var addedCount = 0;
          links.forEach(function (item) {
            if (item.type !== 'link') return;
            existingMap[normalizeComparableUrl(item.url)] = true;
          });
          PRESET_APPS.forEach(function (preset) {
            var key = normalizeComparableUrl(preset.url);
            if (!key || existingMap[key]) return;
            links.push({
              id: generateLibraryItemId(),
              type: 'link',
              url: preset.url,
              name: preset.name,
              folderId: null
            });
            existingMap[key] = true;
            addedCount += 1;
          });
          if (addedCount > 0) saveLinks(links);
          localStorage.setItem(PRESET_APPS_SEEDED_KEY, '1');
        } catch (e) {}
      }
      var ACTIVITIES_STORAGE_KEY = 'tidal_organiser_schedule_activities';
      var POINTS_STORAGE_KEY = 'tidal_organiser_points:' + USER_STORAGE_SUFFIX;
      var PRESET_APPS_SEEDED_KEY = 'tidal_organiser_preset_apps_seeded:' + USER_STORAGE_SUFFIX;
      var STREAK_STORAGE_KEY = 'tidal_organiser_daily_streak:' + USER_STORAGE_SUFFIX;
      var STREAK_LAST_LOGIN_STORAGE_KEY = 'tidal_organiser_daily_streak_last:' + USER_STORAGE_SUFFIX;
      var THEME_STORAGE_KEY = 'tidal_organiser_theme:' + USER_STORAGE_SUFFIX;
      var UNLOCKED_THEMES_STORAGE_KEY = 'tidal_organiser_unlocked_themes:' + USER_STORAGE_SUFFIX;
      var SHARDS_STORAGE_KEY = 'tidal_organiser_shards:' + USER_STORAGE_SUFFIX;
      var THEME_LABELS = { ocean: 'Classic', dark: 'Dark Mode', y2k: 'Y2K Gold' };
      var THEME_UNLOCK_COSTS = {
        y2k: { points: 30, shards: 3 }
      };
      var stylePurchaseOverlay = document.getElementById('style-purchase-overlay');
      var stylePurchaseTitle = document.getElementById('style-purchase-title');
      var stylePurchaseCost = document.getElementById('style-purchase-cost');
      var stylePurchaseError = document.getElementById('style-purchase-error');
      var stylePurchasePointsBtn = document.getElementById('style-purchase-points-btn');
      var stylePurchaseShardsBtn = document.getElementById('style-purchase-shards-btn');
      var stylePurchaseCancelBtn = document.getElementById('style-purchase-cancel-btn');
      var pendingStylePurchaseTheme = null;
      var QUESTS_STORAGE_KEY = 'tidal_organiser_daily_quests:' + USER_STORAGE_SUFFIX;
      var allSchedulesDateFilter = 'all';
      var allSchedulesSortMode = 'smart';
      var allSchedulesStatusFilter = 'all';
      var lastAllSchedulesViewKey = null;
      var PICKER_MENU_TRANSITION_MS = 240;
      var ALL_SCHEDULES_LIST_TRANSITION_MS = 280;
      var allSchedulesSearchQuery = '';
      var MOTIVATION_DATE_STORAGE_KEY = 'tidal_organiser_motivation_day:' + USER_STORAGE_SUFFIX;
      var MOTIVATION_INDEX_STORAGE_KEY = 'tidal_organiser_motivation_idx:' + USER_STORAGE_SUFFIX;
      var GOALS_STORAGE_KEY = 'tidal_organiser_goals:' + USER_STORAGE_SUFFIX;
      var AI_CHAT_STORAGE_KEY = 'tidal_organiser_ai_chat:' + USER_STORAGE_SUFFIX;
      var AI_CHAT_PREVIOUS_STORAGE_KEY = 'tidal_organiser_ai_chat_previous:' + USER_STORAGE_SUFFIX;
      var AI_MEMORY_STORAGE_KEY = 'tidal_organiser_ai_memory:' + USER_STORAGE_SUFFIX;
      var AI_NEXT_DAY_PLAN_STORAGE_KEY = 'tidal_organiser_ai_next_day_plan:' + USER_STORAGE_SUFFIX;
      var aiNextDayPlanExpiryTimer = null;
      var aiNextDayPlanReplacePending = null;
      var goalRemindersQueued = false;
      var currentPanelTarget = 'apps';
      var currentOverdueToast = null;
      var mailCompletionBonusKey = null;
      var MAIL_STORAGE_KEY = 'tidal_organiser_mail:' + USER_STORAGE_SUFFIX;
      var MAIL_BONUS_CLAIMED_KEY = 'tidal_organiser_mail_bonus_claimed:' + USER_STORAGE_SUFFIX;
      var OVERDUE_TOAST_DAY_STORAGE_KEY = 'tidal_organiser_overdue_toast_day:' + USER_STORAGE_SUFFIX;
      var OVERDUE_TOAST_LAST_MS_STORAGE_KEY = 'tidal_organiser_overdue_toast_last_ms:' + USER_STORAGE_SUFFIX;
      var OVERDUE_TOAST_COOLDOWN_MS = 15 * 60 * 1000;
      var QUEST_COMPLETE_THREE_REWARD = 15;
      var QUEST_NO_OVERDUE_REWARD = 15;
      var QUEST_COMPLETE_THREE_SHARD_REWARD = 1;
      var QUEST_NO_OVERDUE_SHARD_REWARD = 1;
      var scheduleCompleteOverlay = document.getElementById('schedule-complete-overlay');
      var scheduleCompleteText = document.getElementById('schedule-complete-text');
      var scheduleCompleteHideTimer = null;
      var streakLoginOverlay = document.getElementById('streak-login-overlay');
      var streakLoginTitle = document.getElementById('streak-login-title');
      var streakLoginHideTimer = null;
      var focusModeOverlay = document.getElementById('focus-mode-overlay');
      var focusModeKicker = document.getElementById('focus-mode-kicker');
      var focusModeTitle = document.getElementById('focus-mode-title');
      var focusModeTime = document.getElementById('focus-mode-time');
      var focusModeRing = document.getElementById('focus-mode-ring');
      var focusModeToggleBtn = document.getElementById('focus-mode-toggle-btn');
      var focusModeDoneBtn = document.getElementById('focus-mode-done-btn');
      var focusModeExitBtn = document.getElementById('focus-mode-exit-btn');
      var focusModeMinutesInput = document.getElementById('focus-mode-minutes-input');
      var focusModeStartTimerBtn = document.getElementById('focus-mode-start-timer-btn');
      var focusModeBackStopwatchBtn = document.getElementById('focus-mode-back-stopwatch-btn');
      var focusTimerId = null;
      var focusContext = null;
      var freeFocusElapsedMs = 0;
      var freeFocusStartedAt = null;
      var freeFocusModeType = 'stopwatch';
      var freeTimerDurationMs = 0;
      var freeTimerRemainingMs = 0;
      var freeTimerEndsAt = null;
      var clickAudioContext = null;

      function getDisplayName() {
        try {
          var raw = localStorage.getItem(DISPLAY_NAME_KEY) || '';
          return (raw || '').trim();
        } catch (e) {
          return '';
        }
      }

      function setDisplayName(nextName) {
        try {
          localStorage.setItem(DISPLAY_NAME_KEY, (nextName || '').trim());
        } catch (e) {}
        renderDisplayName();
      }

      function renderDisplayName() {
        var nameDisplay = document.getElementById('app-name-display');
        if (!nameBtn || !nameDisplay) return;
        var n = getDisplayName();
        nameDisplay.textContent = n || 'your name';
        nameBtn.setAttribute('aria-label', n ? ('Welcome ' + n + ', click to change your name') : 'Welcome, click to set your name');
        nameBtn.setAttribute('title', n ? 'Click to change your name' : 'Click to set your name');
      }

      function getBrowserTimezone() {
        try {
          return Intl.DateTimeFormat().resolvedOptions().timeZone || 'UTC';
        } catch (e) {
          return 'UTC';
        }
      }

      function getUserCity() {
        try {
          return (localStorage.getItem(CITY_STORAGE_KEY) || '').trim();
        } catch (e) {
          return '';
        }
      }

      function getUserTimezone() {
        try {
          var stored = (localStorage.getItem(TIMEZONE_STORAGE_KEY) || '').trim();
          return stored || getBrowserTimezone();
        } catch (e) {
          return getBrowserTimezone();
        }
      }

      function setUserTimezone(timeZone) {
        var safe = (timeZone || '').trim() || getBrowserTimezone();
        try {
          localStorage.setItem(TIMEZONE_STORAGE_KEY, safe);
        } catch (e) {}
        renderLocalClock();
      }

      function timezoneToCityLabel(timeZone) {
        if (!timeZone) return 'Local';
        var part = timeZone.split('/').pop() || timeZone;
        return part.replace(/_/g, ' ');
      }

      function formatLocalTime(date, timeZone) {
        try {
          return new Intl.DateTimeFormat(undefined, {
            timeZone: timeZone,
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
          }).format(date);
        } catch (e) {
          return date.toLocaleTimeString(undefined, { hour: 'numeric', minute: '2-digit', hour12: true });
        }
      }

      function formatLocalTimeIso(date, timeZone) {
        try {
          var parts = new Intl.DateTimeFormat('en-CA', {
            timeZone: timeZone,
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
          }).formatToParts(date);
          var map = {};
          parts.forEach(function (p) {
            if (p.type !== 'literal') map[p.type] = p.value;
          });
          return map.year + '-' + map.month + '-' + map.day + 'T' + map.hour + ':' + map.minute + ':' + map.second;
        } catch (e) {
          return date.toISOString();
        }
      }

      function renderLocalClock() {
        if (!localTimeEl) return;
        var timeZone = getUserTimezone();
        var now = new Date();
        if (localClockEl) localClockEl.hidden = false;
        var timeText = formatLocalTime(now, timeZone);
        localTimeEl.textContent = timeText;
        localTimeEl.setAttribute('datetime', formatLocalTimeIso(now, timeZone));
        if (localClockEl) {
          localClockEl.setAttribute('title', timeText + ' (' + timeZone + ')');
        }
      }

      function initLocalClock() {
        if (!getUserCity() && !localStorage.getItem(TIMEZONE_STORAGE_KEY)) {
          setUserTimezone(getBrowserTimezone());
        }
        renderLocalClock();
        if (localClockTimer) clearInterval(localClockTimer);
        localClockTimer = setInterval(renderLocalClock, 1000);
      }

      function setWelcomeAskMode() {
        if (welcomeGreeting) welcomeGreeting.textContent = "Hi, What's your name?";
        if (welcomeForm) welcomeForm.hidden = false;
        if (welcomeInput) welcomeInput.value = getDisplayName();
      }

      function setWelcomeBackMode(name) {
        if (welcomeGreeting) welcomeGreeting.textContent = 'Hi ' + name + ', Welcome back!';
        if (welcomeForm) welcomeForm.hidden = true;
      }

      function welcomeWait(ms) {
        return new Promise(function (resolve) {
          setTimeout(resolve, ms);
        });
      }

      function resetWelcomeAnimState() {
        if (!welcomeScreen) return;
        welcomeScreen.classList.remove('is-content-visible', 'is-content-fading-out', 'is-bg-fading-out');
        document.body.classList.remove('welcome-screen-revealing-app');
      }

      function fadeWelcomeContentIn() {
        if (!welcomeScreen) return;
        welcomeScreen.classList.remove('is-content-fading-out');
        welcomeScreen.classList.add('is-content-visible');
      }

      function fadeWelcomeContentOut() {
        return new Promise(function (resolve) {
          if (!welcomeScreen) {
            resolve();
            return;
          }
          welcomeScreen.classList.remove('is-content-visible');
          welcomeScreen.classList.add('is-content-fading-out');
          var settled = false;
          function done() {
            if (settled) return;
            settled = true;
            resolve();
          }
          if (welcomeGreeting) {
            welcomeGreeting.addEventListener('transitionend', function onEnd(e) {
              if (e.propertyName !== 'opacity') return;
              welcomeGreeting.removeEventListener('transitionend', onEnd);
              done();
            });
          }
          setTimeout(done, WELCOME_FADE_MS + 80);
        });
      }

      function fadeWelcomeBackgroundOut() {
        return new Promise(function (resolve) {
          if (!welcomeScreen) {
            resolve();
            return;
          }
          var backdrop = welcomeScreen.querySelector('.welcome-screen-backdrop');
          document.body.classList.add('welcome-screen-revealing-app');
          welcomeScreen.classList.add('is-bg-fading-out');
          var settled = false;
          function done() {
            if (settled) return;
            settled = true;
            resolve();
          }
          if (backdrop) {
            backdrop.addEventListener('transitionend', function onEnd(e) {
              if (e.target !== backdrop || e.propertyName !== 'opacity') return;
              backdrop.removeEventListener('transitionend', onEnd);
              done();
            });
          }
          setTimeout(done, WELCOME_BG_FADE_MS + 80);
        });
      }

      function fadeWelcomeBackgroundOutAfterDelay() {
        return welcomeWait(WELCOME_BG_DELAY_MS).then(fadeWelcomeBackgroundOut);
      }

      function finishWelcomeExit() {
        welcomeSequenceActive = false;
        if (welcomeDismissTimer) {
          clearTimeout(welcomeDismissTimer);
          welcomeDismissTimer = null;
        }
        if (!welcomeScreen) return;
        welcomeScreen.classList.remove('is-open');
        welcomeScreen.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('welcome-screen-active');
        resetWelcomeAnimState();
        clearAiChatOnLogin();
        queueLoginNotificationToasts();
      }

      function generateGoalId() {
        return 'goal_' + Date.now().toString(36) + '_' + Math.random().toString(36).slice(2, 8);
      }

      function getGoals() {
        try {
          var raw = localStorage.getItem(GOALS_STORAGE_KEY);
          if (!raw) return [];
          var parsed = JSON.parse(raw);
          return Array.isArray(parsed) ? parsed : [];
        } catch (e) {
          return [];
        }
      }

      function saveGoals(list) {
        localStorage.setItem(GOALS_STORAGE_KEY, JSON.stringify(list || []));
      }

      function normalizeGoal(goal) {
        var g = goal && typeof goal === 'object' ? goal : {};
        return {
          id: g.id || generateGoalId(),
          title: String(g.title || '').trim(),
          notes: String(g.notes || '').trim(),
          targetDate: g.targetDate || '',
          remindOnLogin: g.remindOnLogin !== false,
          completed: !!g.completed,
          createdAt: typeof g.createdAt === 'number' ? g.createdAt : Date.now()
        };
      }

      function renderGoals() {
        var listEl = document.getElementById('goals-list');
        var emptyEl = document.getElementById('goals-empty');
        if (!listEl) return;
        var goals = getGoals().map(normalizeGoal).filter(function (g) { return g.title; });
        goals.sort(function (a, b) {
          if (a.completed !== b.completed) return a.completed ? 1 : -1;
          return b.createdAt - a.createdAt;
        });
        listEl.innerHTML = '';
        goals.forEach(function (goal) {
          var li = document.createElement('li');
          li.className = 'goals-item' + (goal.completed ? ' goals-item--done' : '');
          var datePart = goal.targetDate
            ? '<span class="goals-item-date">Due ' + formatDateLabel(goal.targetDate) + '</span>'
            : '';
          var notesPart = goal.notes
            ? '<p class="goals-item-notes">' + escapeHtml(goal.notes) + '</p>'
            : '';
          li.innerHTML =
            '<label class="goals-item-check">' +
              '<input type="checkbox" class="goals-item-complete" data-id="' + goal.id + '"' + (goal.completed ? ' checked' : '') + '>' +
              '<span class="goals-item-title">' + escapeHtml(goal.title) + '</span>' +
            '</label>' +
            notesPart +
            '<div class="goals-item-meta">' + datePart +
              (goal.remindOnLogin && !goal.completed ? '<span class="goals-item-remind">Login reminder on</span>' : '') +
            '</div>' +
            '<button type="button" class="goals-item-delete" data-id="' + goal.id + '" aria-label="Delete goal">Delete</button>';
          listEl.appendChild(li);
        });
        if (emptyEl) emptyEl.hidden = goals.length > 0;
        listEl.querySelectorAll('.goals-item-complete').forEach(function (cb) {
          cb.addEventListener('change', function () {
            var id = cb.getAttribute('data-id');
            var all = getGoals().map(normalizeGoal);
            var idx = all.findIndex(function (g) { return g.id === id; });
            if (idx < 0) return;
            all[idx].completed = cb.checked;
            saveGoals(all);
            renderGoals();
          });
        });
        listEl.querySelectorAll('.goals-item-delete').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var id = btn.getAttribute('data-id');
            saveGoals(getGoals().filter(function (g) { return g.id !== id; }));
            renderGoals();
          });
        });
      }

      function escapeHtml(str) {
        return String(str || '')
          .replace(/&/g, '&amp;')
          .replace(/</g, '&lt;')
          .replace(/>/g, '&gt;')
          .replace(/"/g, '&quot;');
      }

      function dismissAppToast(toastEl, hideClass) {
        if (!toastEl) return;
        toastEl.classList.add(hideClass || 'is-hiding-up');
        setTimeout(function () {
          if (toastEl.parentNode) toastEl.parentNode.removeChild(toastEl);
          if (toastEl === currentOverdueToast) currentOverdueToast = null;
        }, 340);
      }

      function wireAppToast(toast, options) {
        options = options || {};
        requestAnimationFrame(function () {
          requestAnimationFrame(function () { toast.classList.add('is-visible'); });
        });
        var dismissBtn = toast.querySelector('.app-toast-dismiss');
        if (dismissBtn) {
          dismissBtn.addEventListener('click', function () { dismissAppToast(toast, 'is-hiding-up'); });
        }
        var ctaBtn = toast.querySelector('.app-toast-cta');
        if (ctaBtn && options.onCta) {
          ctaBtn.addEventListener('click', function () {
            dismissAppToast(toast, 'is-hiding-up');
            options.onCta();
          });
        }
        if (options.autoHideMs) {
          setTimeout(function () { dismissAppToast(toast, 'is-hiding-up'); }, options.autoHideMs);
        }
      }

      function showGoalReminderToast(goal) {
        var stack = document.getElementById('goal-reminder-stack');
        if (!stack || !goal || !goal.title) return;
        recordGoalMail(goal);
        var toast = document.createElement('div');
        toast.className = 'app-toast app-toast--goal';
        toast.setAttribute('role', 'status');
        var notes = goal.notes ? '<p class="app-toast-detail">' + escapeHtml(goal.notes) + '</p>' : '';
        var due = goal.targetDate ? '<p class="app-toast-meta">Due ' + escapeHtml(formatDateLabel(goal.targetDate)) + '</p>' : '';
        toast.innerHTML =
          '<div class="app-toast-accent" aria-hidden="true"></div>' +
          '<div class="app-toast-inner">' +
            '<div class="app-toast-head">' +
              '<span class="app-toast-badge app-toast-badge--goal" aria-hidden="true">🎯</span>' +
              '<div class="app-toast-copy">' +
                '<span class="app-toast-kicker">Goal reminder</span>' +
                '<strong class="app-toast-title">' + escapeHtml(goal.title) + '</strong>' +
                notes + due +
              '</div>' +
              '<button type="button" class="app-toast-dismiss" aria-label="Dismiss">×</button>' +
            '</div>' +
            '<div class="app-toast-foot">' +
              '<button type="button" class="app-toast-cta">Open Goals</button>' +
            '</div>' +
          '</div>';
        stack.appendChild(toast);
        wireAppToast(toast, {
          autoHideMs: 12000,
          onCta: function () { playPageTransition(function () { setActivePanel('goals'); }); }
        });
      }

      function getOverdueScheduleItems() {
        return getScheduleItems().filter(function (it) { return it.isOverdue; });
      }

      function showOverdueActivityToast(act, moreCount) {
        var stack = document.getElementById('goal-reminder-stack');
        if (!stack || !act || !act.name) return;
        recordOverdueMail(act, moreCount);
        if (currentOverdueToast) dismissAppToast(currentOverdueToast, 'is-hiding-up');
        var moreLine = moreCount > 0
          ? '<p class="app-toast-more">and ' + moreCount + ' more overdue</p>'
          : '';
        var when = formatUpcomingWhen(act.dateKey, act.start);
        var toast = document.createElement('div');
        toast.className = 'app-toast app-toast--overdue';
        toast.setAttribute('role', 'status');
        toast.innerHTML =
          '<div class="app-toast-accent" aria-hidden="true"></div>' +
          '<div class="app-toast-inner">' +
            '<div class="app-toast-head">' +
              '<span class="app-toast-badge app-toast-badge--overdue" aria-hidden="true">!</span>' +
              '<div class="app-toast-copy">' +
                '<span class="app-toast-kicker">Overdue</span>' +
                '<strong class="app-toast-title">' + escapeHtml(act.name) + '</strong>' +
                '<p class="app-toast-meta">' + escapeHtml(when) + '</p>' +
                '<p class="app-toast-message">You can do it now!</p>' +
                moreLine +
              '</div>' +
              '<button type="button" class="app-toast-dismiss" aria-label="Dismiss">×</button>' +
            '</div>' +
            '<div class="app-toast-foot">' +
              '<button type="button" class="app-toast-cta">View schedule</button>' +
            '</div>' +
          '</div>';
        stack.appendChild(toast);
        currentOverdueToast = toast;
        wireAppToast(toast, {
          autoHideMs: 14000,
          onCta: function () {
            allSchedulesStatusFilter = 'overdue';
            document.querySelectorAll('.all-schedules-chip').forEach(function (chip) {
              chip.classList.toggle('is-active', chip.getAttribute('data-status-filter') === 'overdue');
            });
            playPageTransition(function () {
              setActivePanel('all_schedules');
              renderAllSchedules();
            });
          }
        });
      }

      function shouldShowOverdueNotification() {
        var todayKey = getLocalDateKey(0);
        var lastDay = localStorage.getItem(OVERDUE_TOAST_DAY_STORAGE_KEY);
        if (lastDay !== todayKey) return true;
        var lastMs = parseInt(localStorage.getItem(OVERDUE_TOAST_LAST_MS_STORAGE_KEY), 10);
        if (isNaN(lastMs)) return true;
        return (Date.now() - lastMs) >= OVERDUE_TOAST_COOLDOWN_MS;
      }

      function markOverdueNotificationShown() {
        localStorage.setItem(OVERDUE_TOAST_DAY_STORAGE_KEY, getLocalDateKey(0));
        localStorage.setItem(OVERDUE_TOAST_LAST_MS_STORAGE_KEY, String(Date.now()));
      }

      function showOverdueNotificationOnPanelEnter() {
        if (!shouldShowOverdueNotification()) return;
        var overdue = getOverdueScheduleItems();
        if (!overdue.length) return;
        markOverdueNotificationShown();
        var pick = overdue[Math.floor(Math.random() * overdue.length)];
        showOverdueActivityToast(pick, overdue.length - 1);
      }

      function queueLoginNotificationToasts() {
        if (goalRemindersQueued) return;
        goalRemindersQueued = true;
        var stack = document.getElementById('goal-reminder-stack');
        if (stack) stack.classList.add('app-toast-stack--layered');
        var activeGoals = getGoals().map(normalizeGoal).filter(function (g) {
          return !g.completed && g.remindOnLogin && g.title;
        }).slice(0, 4);
        var overdue = getOverdueScheduleItems();
        var showOverdue = shouldShowOverdueNotification() && overdue.length > 0;
        var baseDelay = 400;
        var stepMs = 120;
        activeGoals.forEach(function (goal, i) {
          setTimeout(function () { showGoalReminderToast(goal); }, baseDelay + i * stepMs);
        });
        if (showOverdue) {
          markOverdueNotificationShown();
          var pick = overdue[Math.floor(Math.random() * overdue.length)];
          var overdueDelay = baseDelay + activeGoals.length * stepMs + (activeGoals.length ? 80 : 0);
          setTimeout(function () {
            showOverdueActivityToast(pick, overdue.length - 1);
          }, overdueDelay);
        }
      }

      function queueGoalLoginReminders() {
        queueLoginNotificationToasts();
      }

      function getAiMessages() {
        try {
          var raw = localStorage.getItem(AI_CHAT_STORAGE_KEY);
          if (!raw) return [];
          var parsed = JSON.parse(raw);
          return Array.isArray(parsed) ? parsed : [];
        } catch (e) {
          return [];
        }
      }

      function saveAiMessages(messages) {
        localStorage.setItem(AI_CHAT_STORAGE_KEY, JSON.stringify(messages.slice(-80)));
      }

      function getPreviousAiMessages() {
        try {
          var raw = localStorage.getItem(AI_CHAT_PREVIOUS_STORAGE_KEY);
          if (!raw) return [];
          var parsed = JSON.parse(raw);
          return Array.isArray(parsed) ? parsed : [];
        } catch (e) {
          return [];
        }
      }

      function archiveActiveAiChatAsPrevious() {
        var messages = getAiMessages().filter(function (m) { return m && m.content; });
        if (!messages.length) return;
        localStorage.setItem(AI_CHAT_PREVIOUS_STORAGE_KEY, JSON.stringify(messages.slice(-80)));
      }

      function clearAiChatOnLogin() {
        archiveActiveAiChatAsPrevious();
        localStorage.setItem(AI_CHAT_STORAGE_KEY, JSON.stringify([]));
        renderAiChat();
      }

      function restorePreviousAiChat() {
        var previous = getPreviousAiMessages().filter(function (m) { return m && m.content; });
        if (!previous.length) {
          setAiStatus('No previous chat to restore.', true);
          setTimeout(function () { setAiStatus('', false); }, 2800);
          return;
        }
        saveAiMessages(previous);
        renderAiChat();
        setAiStatus('Previous chat restored.', false);
        setTimeout(function () { setAiStatus('', false); }, 2200);
      }

      function startNewAiChat() {
        archiveActiveAiChatAsPrevious();
        localStorage.setItem(AI_CHAT_STORAGE_KEY, JSON.stringify([]));
        renderAiChat();
        setAiStatus('New chat started.', false);
        setTimeout(function () { setAiStatus('', false); }, 1800);
      }

      var AI_CHAT_WORD_STAGGER_MS = 24;
      var AI_CHAT_USER_WORD_STAGGER_MS = 18;
      var AI_CHAT_BUBBLE_ENTER_MS = 300;

      function scrollAiChatToBottom() {
        var chatWrap = document.getElementById('ai-shell-chat');
        var logEl = document.getElementById('ai-chat-log');
        var scrollParent = chatWrap || logEl;
        if (scrollParent) scrollParent.scrollTop = scrollParent.scrollHeight;
      }

      function updateAiChatEmptyState() {
        var emptyEl = document.getElementById('ai-chat-empty');
        var chatWrap = document.getElementById('ai-shell-chat');
        var hasMessages = getAiMessages().some(function (m) { return m && m.content; });
        if (emptyEl) emptyEl.hidden = hasMessages;
        if (chatWrap) chatWrap.classList.toggle('ai-shell-chat--has-messages', hasMessages);
      }

      function prefersReducedAiMotion() {
        return window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      }

      function buildAiChatWordHtml(text, staggerMs) {
        if (prefersReducedAiMotion()) return escapeHtml(text);
        var parts = String(text || '').split(/(\s+)/);
        var html = '';
        var wordIndex = 0;
        parts.forEach(function (part) {
          if (!part) return;
          if (/^\s+$/.test(part)) {
            html += part.replace(/\n/g, '<br>');
            return;
          }
          html += '<span class="ai-chat-word" style="--word-i:' + wordIndex + ';--word-stagger:' + staggerMs + 'ms">' +
            escapeHtml(part) + '</span>';
          wordIndex += 1;
        });
        return html;
      }

      function getAiChatRowText(row) {
        if (!row) return '';
        var bubble = row.querySelector('.ai-chat-bubble');
        if (!bubble) return '';
        return (bubble.textContent || '').trim();
      }

      function createAiChatRow(role, content, animate, messageAt) {
        var row = document.createElement('div');
        row.className = 'ai-chat-row ai-chat-row--' + (role === 'user' ? 'user' : 'assistant');
        if (messageAt) row.setAttribute('data-message-at', String(messageAt));
        if (animate && !prefersReducedAiMotion()) row.classList.add('is-row-enter');
        var label = role === 'user' ? 'You' : 'Bluely';
        var labelEl = document.createElement('span');
        labelEl.className = 'ai-chat-row-label';
        labelEl.textContent = label;
        var bubble = document.createElement('div');
        bubble.className = 'ai-chat-bubble ai-chat-bubble--' + (role === 'user' ? 'user' : 'assistant');
        if (animate && !prefersReducedAiMotion()) {
          bubble.classList.add('is-bubble-enter', 'is-word-reveal');
          var stagger = role === 'user' ? AI_CHAT_USER_WORD_STAGGER_MS : AI_CHAT_WORD_STAGGER_MS;
          bubble.innerHTML = buildAiChatWordHtml(content, stagger);
        } else {
          bubble.textContent = content;
        }
        row.appendChild(labelEl);
        row.appendChild(bubble);
        if (role === 'assistant') {
          var actions = document.createElement('div');
          actions.className = 'ai-chat-row-actions';
          var copyBtn = document.createElement('button');
          copyBtn.type = 'button';
          copyBtn.className = 'ai-chat-action-btn';
          copyBtn.setAttribute('data-ai-action', 'copy');
          copyBtn.textContent = 'Copy';
          var planBtn = document.createElement('button');
          planBtn.type = 'button';
          planBtn.className = 'ai-chat-action-btn';
          planBtn.setAttribute('data-ai-action', 'add-plan');
          planBtn.textContent = 'Add to plan';
          actions.appendChild(copyBtn);
          actions.appendChild(planBtn);
          row.appendChild(actions);
        }
        return row;
      }

      function appendAiChatMessageDom(role, content, messageAt) {
        var logEl = document.getElementById('ai-chat-log');
        if (!logEl) return;
        var animate = !prefersReducedAiMotion();
        var row = createAiChatRow(role, content, animate, messageAt);
        logEl.appendChild(row);
        updateAiChatEmptyState();
        scrollAiChatToBottom();
        if (animate) {
          var words = row.querySelectorAll('.ai-chat-word').length;
          var stagger = role === 'user' ? AI_CHAT_USER_WORD_STAGGER_MS : AI_CHAT_WORD_STAGGER_MS;
          var duration = AI_CHAT_BUBBLE_ENTER_MS + words * stagger + 120;
          var tick = window.setInterval(scrollAiChatToBottom, 60);
          window.setTimeout(function () {
            window.clearInterval(tick);
            scrollAiChatToBottom();
          }, duration);
        }
      }

      function renderAiChat() {
        var logEl = document.getElementById('ai-chat-log');
        if (!logEl) return;
        var messages = getAiMessages().filter(function (m) { return m && m.content; });
        logEl.innerHTML = '';
        messages.forEach(function (msg) {
          logEl.appendChild(createAiChatRow(msg.role, msg.content, false, msg.at));
        });
        updateAiChatEmptyState();
        scrollAiChatToBottom();
      }

      function setAiStatus(text, isError) {
        var el = document.getElementById('ai-chat-status');
        if (!el) return;
        if (!text) {
          el.hidden = true;
          el.textContent = '';
          return;
        }
        el.hidden = false;
        el.textContent = text;
        el.classList.toggle('ai-chat-status--error', !!isError);
      }

      function appendAiMessage(role, content, options) {
        options = options || {};
        var messages = getAiMessages();
        messages.push({ role: role, content: content, at: Date.now() });
        saveAiMessages(messages);
        if (options.renderOnly) return;
        var last = messages[messages.length - 1];
        appendAiChatMessageDom(role, content, last && last.at);
      }

      function getDateTimePartsInTz(date, timeZone) {
        try {
          var parts = new Intl.DateTimeFormat('en-US', {
            timeZone: timeZone,
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
          }).formatToParts(date);
          var map = {};
          parts.forEach(function (p) {
            if (p.type !== 'literal') map[p.type] = p.value;
          });
          return {
            year: parseInt(map.year, 10),
            month: parseInt(map.month, 10),
            day: parseInt(map.day, 10),
            hour: parseInt(map.hour, 10),
            minute: parseInt(map.minute, 10),
            second: parseInt(map.second, 10)
          };
        } catch (e) {
          return {
            year: date.getFullYear(),
            month: date.getMonth() + 1,
            day: date.getDate(),
            hour: date.getHours(),
            minute: date.getMinutes(),
            second: date.getSeconds()
          };
        }
      }

      function getNext2350Timestamp(timeZone) {
        var now = Date.now();
        var start = now;
        var end = now + 48 * 60 * 60 * 1000;
        var t = start;
        while (t <= end) {
          var parts = getDateTimePartsInTz(new Date(t), timeZone);
          if (parts.hour === 23 && parts.minute === 50 && t > now + 30000) return t;
          t += 60000;
        }
        return now + 24 * 60 * 60 * 1000;
      }

      function getAiNextDayPlan() {
        try {
          var raw = localStorage.getItem(AI_NEXT_DAY_PLAN_STORAGE_KEY);
          if (!raw) return null;
          var parsed = JSON.parse(raw);
          if (!parsed || !parsed.content) return null;
          if (parsed.expiresAt && Date.now() >= parsed.expiresAt) {
            clearAiNextDayPlan();
            return null;
          }
          return {
            content: String(parsed.content),
            sourceAt: parsed.sourceAt || null,
            savedAt: parsed.savedAt || null,
            expiresAt: parsed.expiresAt || null
          };
        } catch (e) {
          return null;
        }
      }

      function clearAiNextDayPlan() {
        try {
          localStorage.removeItem(AI_NEXT_DAY_PLAN_STORAGE_KEY);
        } catch (e) {}
        if (aiNextDayPlanExpiryTimer) {
          clearTimeout(aiNextDayPlanExpiryTimer);
          aiNextDayPlanExpiryTimer = null;
        }
        updateAiNextDayPlanSideBtn();
      }

      function saveAiNextDayPlan(content, sourceAt) {
        var trimmed = (content || '').trim();
        if (!trimmed) return;
        var timeZone = getUserTimezone();
        var expiresAt = getNext2350Timestamp(timeZone);
        try {
          localStorage.setItem(AI_NEXT_DAY_PLAN_STORAGE_KEY, JSON.stringify({
            content: trimmed,
            sourceAt: sourceAt || null,
            savedAt: Date.now(),
            expiresAt: expiresAt
          }));
        } catch (e) {}
        scheduleAiNextDayPlanExpiry();
        updateAiNextDayPlanSideBtn();
      }

      function scheduleAiNextDayPlanExpiry() {
        if (aiNextDayPlanExpiryTimer) {
          clearTimeout(aiNextDayPlanExpiryTimer);
          aiNextDayPlanExpiryTimer = null;
        }
        var plan = getAiNextDayPlan();
        if (!plan || !plan.expiresAt) return;
        var delay = plan.expiresAt - Date.now();
        if (delay <= 0) {
          clearAiNextDayPlan();
          return;
        }
        aiNextDayPlanExpiryTimer = window.setTimeout(function () {
          clearAiNextDayPlan();
          var viewOverlay = document.getElementById('ai-next-day-plan-overlay');
          if (viewOverlay && viewOverlay.classList.contains('is-open')) {
            renderAiNextDayPlanOverlay();
          }
        }, Math.min(delay, 2147483647));
      }

      function purgeExpiredAiNextDayPlan() {
        try {
          var raw = localStorage.getItem(AI_NEXT_DAY_PLAN_STORAGE_KEY);
          if (!raw) return;
          var parsed = JSON.parse(raw);
          if (parsed && parsed.expiresAt && Date.now() >= parsed.expiresAt) clearAiNextDayPlan();
        } catch (e) {}
      }

      function updateAiNextDayPlanSideBtn() {
        var btn = document.getElementById('ai-next-day-plan-side-btn');
        if (!btn) return;
        var hasPlan = !!getAiNextDayPlan();
        btn.classList.toggle('has-plan', hasPlan);
        btn.setAttribute('aria-label', hasPlan ? 'View your next day plan (saved)' : 'View your next day plan (empty)');
      }

      function renderAiNextDayPlanOverlay() {
        var body = document.getElementById('ai-next-day-plan-body');
        if (!body) return;
        var plan = getAiNextDayPlan();
        if (!plan) {
          body.innerHTML = '<p class="ai-next-day-plan-empty">No plan yet. Use <strong>Add to plan</strong> under a Bluely reply to save one.</p>';
          return;
        }
        var escaped = escapeHtml(plan.content).replace(/\n/g, '<br>');
        body.innerHTML = '<div class="ai-next-day-plan-content">' + escaped + '</div>';
      }

      function openAiNextDayPlanOverlay() {
        var overlay = document.getElementById('ai-next-day-plan-overlay');
        if (!overlay) return;
        purgeExpiredAiNextDayPlan();
        renderAiNextDayPlanOverlay();
        overlay.classList.add('is-open');
        overlay.setAttribute('aria-hidden', 'false');
      }

      function closeAiNextDayPlanOverlay() {
        var overlay = document.getElementById('ai-next-day-plan-overlay');
        if (!overlay) return;
        overlay.classList.remove('is-open');
        overlay.setAttribute('aria-hidden', 'true');
      }

      function openAiNextDayPlanReplaceConfirm(onConfirm) {
        aiNextDayPlanReplacePending = onConfirm;
        var overlay = document.getElementById('ai-next-day-plan-confirm-overlay');
        if (!overlay) {
          if (typeof onConfirm === 'function') onConfirm();
          return;
        }
        overlay.classList.add('is-open');
        overlay.setAttribute('aria-hidden', 'false');
      }

      function closeAiNextDayPlanReplaceConfirm() {
        aiNextDayPlanReplacePending = null;
        var overlay = document.getElementById('ai-next-day-plan-confirm-overlay');
        if (!overlay) return;
        overlay.classList.remove('is-open');
        overlay.setAttribute('aria-hidden', 'true');
      }

      function applyAiNextDayPlanFromRow(row) {
        var text = getAiChatRowText(row);
        if (!text) return;
        var messageAt = row.getAttribute('data-message-at');
        var sourceAt = messageAt ? parseInt(messageAt, 10) : Date.now();
        var existing = getAiNextDayPlan();
        if (existing && existing.sourceAt === sourceAt) {
          saveAiNextDayPlan(text, sourceAt);
          setAiStatus('Next day plan updated.', false);
          setTimeout(function () { setAiStatus('', false); }, 2200);
          return;
        }
        if (existing) {
          openAiNextDayPlanReplaceConfirm(function () {
            saveAiNextDayPlan(text, sourceAt);
            setAiStatus('Next day plan updated.', false);
            setTimeout(function () { setAiStatus('', false); }, 2200);
          });
          return;
        }
        saveAiNextDayPlan(text, sourceAt);
        setAiStatus('Added to your next day plan.', false);
        setTimeout(function () { setAiStatus('', false); }, 2200);
      }

      function copyAiChatRowText(row) {
        var text = getAiChatRowText(row);
        if (!text) return;
        function done() {
          setAiStatus('Copied to clipboard.', false);
          setTimeout(function () { setAiStatus('', false); }, 1800);
        }
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(text).then(done).catch(function () {
            fallbackCopyText(text);
            done();
          });
        } else {
          fallbackCopyText(text);
          done();
        }
      }

      function fallbackCopyText(text) {
        var ta = document.createElement('textarea');
        ta.value = text;
        ta.setAttribute('readonly', '');
        ta.style.position = 'fixed';
        ta.style.left = '-9999px';
        document.body.appendChild(ta);
        ta.select();
        try { document.execCommand('copy'); } catch (e) {}
        document.body.removeChild(ta);
      }

      function getAiMemory() {
        try {
          var raw = localStorage.getItem(AI_MEMORY_STORAGE_KEY);
          if (!raw) return { habits: '', likes: '', hobbies: '' };
          var parsed = JSON.parse(raw);
          return {
            habits: (parsed && parsed.habits) ? String(parsed.habits).trim() : '',
            likes: (parsed && parsed.likes) ? String(parsed.likes).trim() : '',
            hobbies: (parsed && parsed.hobbies) ? String(parsed.hobbies).trim() : ''
          };
        } catch (e) {
          return { habits: '', likes: '', hobbies: '' };
        }
      }

      function saveAiMemory(memory) {
        localStorage.setItem(AI_MEMORY_STORAGE_KEY, JSON.stringify({
          habits: (memory.habits || '').trim(),
          likes: (memory.likes || '').trim(),
          hobbies: (memory.hobbies || '').trim()
        }));
      }

      function syncAiMemoryInputs() {
        var memory = getAiMemory();
        var habitsEl = document.getElementById('ai-memory-habits');
        var likesEl = document.getElementById('ai-memory-likes');
        var hobbiesEl = document.getElementById('ai-memory-hobbies');
        if (habitsEl) habitsEl.value = memory.habits;
        if (likesEl) likesEl.value = memory.likes;
        if (hobbiesEl) hobbiesEl.value = memory.hobbies;
      }

      function buildAiMemoryPromptBlock() {
        var memory = getAiMemory();
        var parts = [];
        if (memory.habits) parts.push('Habits: ' + memory.habits);
        if (memory.likes) parts.push('Likes & preferences: ' + memory.likes);
        if (memory.hobbies) parts.push('Hobbies: ' + memory.hobbies);
        if (!parts.length) return '';
        return ' Remember these personal details about the user and use them naturally when relevant: ' + parts.join(' ') + '.';
      }

      function buildAiSystemPrompt() {
        var name = getDisplayName() || 'there';
        var pending = getScheduleItems().filter(function (it) { return it.status !== 'done'; }).length;
        var goals = getGoals().map(normalizeGoal).filter(function (g) { return !g.completed; }).length;
        return 'You are Bluely, a friendly productivity assistant in a personal organiser app. ' +
          'The user is ' + name + '. They have ' + pending + ' upcoming schedule items and ' + goals + ' active goals.' +
          buildAiMemoryPromptBlock() +
          ' Give concise, practical answers about planning, focus, schedules, and motivation. Keep replies under 120 words unless asked for detail.';
      }

      function requestOllamaChat(userText) {
        var messages = [{ role: 'system', content: buildAiSystemPrompt() }];
        getAiMessages().forEach(function (m) {
          if (m.role === 'user' || m.role === 'assistant') {
            messages.push({ role: m.role, content: m.content });
          }
        });
        messages.push({ role: 'user', content: userText });
        return fetch('api/chat.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ messages: messages })
        }).then(function (res) {
          return res.json().then(function (data) {
            if (!res.ok) throw new Error((data && data.error) || 'Chat request failed');
            return data.reply || '';
          });
        });
      }

      function sendAiMessage(text) {
        var trimmed = (text || '').trim();
        if (!trimmed) return Promise.resolve();
        appendAiMessage('user', trimmed);
        setAiStatus('Thinking…', false);
        return requestOllamaChat(trimmed).then(function (reply) {
          appendAiMessage('assistant', (reply || '').trim() || 'Sorry, I could not generate a reply.');
          setAiStatus('', false);
        }).catch(function (err) {
          appendAiMessage('assistant', 'Error: ' + (err && err.message ? err.message : 'Could not reach Ollama.'));
          setAiStatus('', true);
        });
      }

      function runWelcomeBackExit() {
        if (welcomeSequenceActive) return;
        welcomeSequenceActive = true;
        if (welcomeDismissTimer) {
          clearTimeout(welcomeDismissTimer);
          welcomeDismissTimer = null;
        }
        fadeWelcomeContentOut()
          .then(fadeWelcomeBackgroundOutAfterDelay)
          .then(finishWelcomeExit);
      }

      function runNiceToMeetYouSequence(name) {
        if (welcomeSequenceActive) return;
        welcomeSequenceActive = true;
        fadeWelcomeContentOut()
          .then(function () {
            if (welcomeForm) welcomeForm.hidden = true;
            if (welcomeGreeting) welcomeGreeting.textContent = 'Nice to meet you ' + name + '!';
            welcomeScreen.classList.remove('is-content-fading-out');
            void welcomeScreen.offsetWidth;
            fadeWelcomeContentIn();
            return welcomeWait(WELCOME_NICE_MS);
          })
          .then(fadeWelcomeContentOut)
          .then(fadeWelcomeBackgroundOutAfterDelay)
          .then(finishWelcomeExit);
      }

      function runWelcomeQuickExit() {
        if (welcomeSequenceActive) return;
        welcomeSequenceActive = true;
        fadeWelcomeContentOut()
          .then(fadeWelcomeBackgroundOutAfterDelay)
          .then(finishWelcomeExit);
      }

      function closeWelcomeScreen() {
        finishWelcomeExit();
      }

      function openWelcomeScreen(options) {
        if (!welcomeScreen) return;
        var forceEdit = options && options.forceEdit;
        var savedName = getDisplayName();
        welcomeIsEditMode = !!forceEdit;
        welcomeSequenceActive = false;

        if (forceEdit) {
          setWelcomeAskMode();
        } else if (savedName) {
          setWelcomeBackMode(savedName);
        } else {
          setWelcomeAskMode();
        }

        resetWelcomeAnimState();
        document.body.classList.add('welcome-screen-active');
        welcomeScreen.classList.add('is-open');
        welcomeScreen.setAttribute('aria-hidden', 'false');

        requestAnimationFrame(function () {
          requestAnimationFrame(function () {
            fadeWelcomeContentIn();
          });
        });

        if (welcomeForm && welcomeForm.hidden) {
          welcomeDismissTimer = setTimeout(runWelcomeBackExit, 2600);
        } else if (welcomeInput) {
          setTimeout(function () {
            welcomeInput.focus();
            welcomeInput.select();
          }, WELCOME_FADE_MS + 120);
        }
      }

      function openNamePrompt(force) {
        if (!force) {
          openWelcomeScreen({ forceEdit: false });
          return;
        }
        openWelcomeScreen({ forceEdit: true });
      }

      if (nameBtn) nameBtn.addEventListener('click', function () { openNamePrompt(true); });
      if (welcomeScreen) {
        welcomeScreen.addEventListener('click', function () {
          if (welcomeSequenceActive) return;
          if (welcomeForm && !welcomeForm.hidden) return;
          runWelcomeBackExit();
        });
      }
      if (welcomeForm && welcomeInput) {
        welcomeForm.addEventListener('submit', function (e) {
          e.preventDefault();
          if (welcomeSequenceActive) return;
          var next = (welcomeInput.value || '').trim();
          if (!next) return;
          var wasAskingName = welcomeForm && !welcomeForm.hidden;
          setDisplayName(next);
          if (wasAskingName && !welcomeIsEditMode) {
            runNiceToMeetYouSequence(next);
          } else {
            runWelcomeQuickExit();
          }
        });
        welcomeForm.addEventListener('click', function (e) {
          e.stopPropagation();
        });
        welcomeInput.addEventListener('keydown', function (e) {
          if (e.key !== 'Enter') return;
          e.preventDefault();
          if (typeof welcomeForm.requestSubmit === 'function') {
            welcomeForm.requestSubmit();
          } else {
            welcomeForm.dispatchEvent(new Event('submit', { cancelable: true, bubbles: true }));
          }
        });
      }

      var THEME_OPTIONS = ['ocean', 'dark', 'y2k'];
      var THEME_SOUND_PROFILES = {
        ocean: { wave: 'sine',     base: 520, accent: 780, type: 'lowpass', q: 0.75 },
        dark:  { wave: 'triangle', base: 240, accent: 380, type: 'lowpass', q: 0.95 },
        y2k:   { wave: 'square',   base: 440, accent: 660, type: 'bandpass', q: 1.1 }
      };
      var PRESET_APPS = [
        { name: 'Google Docs', url: 'https://docs.google.com/' },
        { name: 'Google Slides', url: 'https://docs.google.com/presentation' },
        { name: 'Gmail', url: 'https://mail.google.com/' },
        { name: 'Bluely Store', url: 'bluely://store' },
        { name: 'Bluely Mail', url: 'bluely://mail' }
      ];
      var TIDAL_STORE_APPS = [
        { name: 'Google Classroom', url: 'https://classroom.google.com/', section: 'useful', description: 'Manage classes, assignments, and announcements in one place.' },
        { name: 'Google Sheets', url: 'https://docs.google.com/spreadsheets', section: 'useful', description: 'Create and collaborate on spreadsheets with formulas and charts.' },
        { name: 'ChatGPT', url: 'https://chatgpt.com/', section: 'useful', description: 'AI assistant for writing, brainstorming, coding, and research.' },
        { name: 'Claude', url: 'https://claude.ai/', section: 'useful', description: 'AI workspace for analysis, writing, and long-context tasks.' },
        { name: 'Canva', url: 'https://www.canva.com/', section: 'useful', description: 'Design presentations, posters, and social media visuals quickly.' },
        { name: 'Wikipedia', url: 'https://www.wikipedia.org/', section: 'useful', description: 'Free encyclopedia for quick learning and reliable references.' },
        { name: 'MuseScore', url: 'https://musescore.org/', section: 'useful', description: 'Compose and edit music notation with powerful free tools.' },
        { name: 'Google Earth', url: 'https://earth.google.com/', section: 'discover', description: 'Explore the world with 3D maps, satellite imagery, and tours.' },
        { name: 'Pinterest', url: 'https://www.pinterest.com/', section: 'discover', description: 'Discover visual ideas for projects, design, and inspiration.' },
        { name: 'YouTube', url: 'https://www.youtube.com/', section: 'discover', description: 'Watch and discover videos, tutorials, and creator content.' }
      ];
      var GOOGLE_DOCS_ICON_PATH = 'https://www.gstatic.com/images/branding/product/2x/docs_48dp.png';
      var GOOGLE_SLIDES_ICON_PATH = 'https://www.gstatic.com/images/branding/product/2x/slides_48dp.png';
      var GMAIL_ICON_PATH = 'https://www.gstatic.com/images/branding/product/2x/gmail_48dp.png';
      var BLUELY_STORE_ICON_SVG = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0' x2='1' y1='0' y2='1'%3E%3Cstop stop-color='%2385b5f7'/%3E%3Cstop offset='1' stop-color='%236b9aed'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='8' y='18' width='48' height='38' rx='10' fill='url(%23g)'/%3E%3Cpath d='M20 23c0-7 5-11 12-11s12 4 12 11' fill='none' stroke='%23fff' stroke-width='4' stroke-linecap='round'/%3E%3Cpath d='M17 31h30M17 38h30' stroke='%23fff' stroke-opacity='.8' stroke-width='2'/%3E%3C/svg%3E";
      var TIDAL_STORE_ICON_SVG = BLUELY_STORE_ICON_SVG;
      var BLUELY_MAIL_ICON_SVG = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Cdefs%3E%3ClinearGradient id='m' x1='0' x2='1' y1='0' y2='1'%3E%3Cstop stop-color='%23ffffff'/%3E%3Cstop offset='1' stop-color='%23d8e6fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='1' y1='1' y2='0'%3E%3Cstop stop-color='%236b9aed'/%3E%3Cstop offset='1' stop-color='%2385b5f7'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='6' y='14' width='52' height='36' rx='8' fill='url(%23b)'/%3E%3Cpath d='M6 20l26 18 26-18' fill='none' stroke='%23fff' stroke-width='3.5' stroke-linejoin='round'/%3E%3Crect x='14' y='28' width='36' height='18' rx='4' fill='url(%23m)' opacity='.95'/%3E%3Cpath d='M20 34h24M20 39h16' stroke='%236b9aed' stroke-width='2.2' stroke-linecap='round'/%3E%3C/svg%3E";
      var tidalStoreShowAll = false;
      var activeStoreApp = null;

      function getPoints() {
        try {
          var raw = localStorage.getItem(POINTS_STORAGE_KEY);
          if (raw === null) return 0;
          var points = parseInt(raw, 10);
          return isNaN(points) ? 0 : points;
        } catch (e) {
          return 0;
        }
      }

      function getShards() {
        try {
          var raw = localStorage.getItem(SHARDS_STORAGE_KEY);
          if (raw === null) return 0;
          var shards = parseInt(raw, 10);
          return isNaN(shards) ? 0 : Math.max(0, shards);
        } catch (e) {
          return 0;
        }
      }

      function getActiveThemeName() {
        for (var i = 0; i < THEME_OPTIONS.length; i++) {
          if (document.body.classList.contains('theme-' + THEME_OPTIONS[i])) return THEME_OPTIONS[i];
        }
        return 'ocean';
      }

      function getClickAudioContext() {
        var Ctx = window.AudioContext || window.webkitAudioContext;
        if (!Ctx) return null;
        if (!clickAudioContext) clickAudioContext = new Ctx();
        return clickAudioContext;
      }

      function getButtonSoundVariant(buttonEl) {
        if (!buttonEl) return 'default';
        var id = (buttonEl.id || '').toLowerCase();
        var cls = (buttonEl.className || '').toLowerCase();
        if (cls.indexOf('upcoming-delete-btn') >= 0 || cls.indexOf('add-link-btn-danger') >= 0 || id.indexOf('delete') >= 0) return 'danger';
        if (id.indexOf('focus-mode-done') >= 0 || cls.indexOf('is-active') >= 0) return 'confirm';
        if (id.indexOf('focus-mode-exit') >= 0 || id.indexOf('back') >= 0 || id.indexOf('cancel') >= 0) return 'soft';
        if (cls.indexOf('custom-style-btn') >= 0 || id.indexOf('style-') >= 0) return 'theme';
        if (cls.indexOf('upcoming-status-btn') >= 0) return 'toggle';
        return 'default';
      }

      function playButtonClickSound(buttonEl) {
        try {
          var ctx = getClickAudioContext();
          if (!ctx) return;
          if (ctx.state === 'suspended') {
            ctx.resume().catch(function () {});
          }
          var theme = getActiveThemeName();
          var profile = THEME_SOUND_PROFILES[theme] || THEME_SOUND_PROFILES.ocean;
          var variant = getButtonSoundVariant(buttonEl);
          var offsetByVariant = {
            default: 0,
            soft: -40,
            toggle: 20,
            theme: 55,
            confirm: 90,
            danger: -70
          };
          var start = ctx.currentTime + 0.005;
          var duration = variant === 'theme' ? 0.13 : 0.1;
          var baseFreq = Math.max(120, profile.base + (offsetByVariant[variant] || 0));
          var accentFreq = Math.max(180, profile.accent + (offsetByVariant[variant] || 0) * 1.2);

          var oscA = ctx.createOscillator();
          var oscB = ctx.createOscillator();
          var gain = ctx.createGain();
          var filter = ctx.createBiquadFilter();

          oscA.type = profile.wave;
          oscB.type = (profile.wave === 'sine') ? 'triangle' : 'sine';
          oscA.frequency.setValueAtTime(baseFreq, start);
          oscB.frequency.setValueAtTime(accentFreq, start);
          oscA.frequency.exponentialRampToValueAtTime(Math.max(80, baseFreq * 0.86), start + duration);
          oscB.frequency.exponentialRampToValueAtTime(Math.max(100, accentFreq * 0.82), start + duration);

          filter.type = profile.type;
          filter.Q.value = profile.q;
          filter.frequency.setValueAtTime(Math.max(280, accentFreq * 1.35), start);

          gain.gain.setValueAtTime(0.0001, start);
          gain.gain.exponentialRampToValueAtTime(variant === 'danger' ? 0.05 : 0.038, start + 0.015);
          gain.gain.exponentialRampToValueAtTime(0.0001, start + duration);

          oscA.connect(filter);
          oscB.connect(filter);
          filter.connect(gain);
          gain.connect(ctx.destination);

          oscA.start(start);
          oscB.start(start);
          oscA.stop(start + duration + 0.01);
          oscB.stop(start + duration + 0.01);
        } catch (e) {}
      }

      function renderPoints() {
        var pointsVal = document.getElementById('app-points-value');
        var shardsVal = document.getElementById('app-shards-value');
        if (pointsVal) pointsVal.textContent = String(getPoints());
        if (shardsVal) shardsVal.textContent = String(getShards());
      }

      function setPoints(points) {
        var safePoints = parseInt(points, 10);
        if (isNaN(safePoints)) safePoints = 0;
        localStorage.setItem(POINTS_STORAGE_KEY, String(safePoints));
        renderPoints();
      }

      function setShards(shards) {
        var safeShards = parseInt(shards, 10);
        if (isNaN(safeShards) || safeShards < 0) safeShards = 0;
        localStorage.setItem(SHARDS_STORAGE_KEY, String(safeShards));
        renderPoints();
      }

      function getMailBonusClaimedKeys() {
        try {
          var raw = localStorage.getItem(MAIL_BONUS_CLAIMED_KEY);
          var parsed = raw ? JSON.parse(raw) : [];
          return Array.isArray(parsed) ? parsed : [];
        } catch (e) {
          return [];
        }
      }

      function hasMailBonusClaimed(taskKey) {
        return getMailBonusClaimedKeys().indexOf(taskKey) >= 0;
      }

      function markMailBonusClaimed(taskKey) {
        if (!taskKey) return;
        var keys = getMailBonusClaimedKeys();
        if (keys.indexOf(taskKey) >= 0) return;
        keys.push(taskKey);
        localStorage.setItem(MAIL_BONUS_CLAIMED_KEY, JSON.stringify(keys));
      }

      function getScheduleTaskKey(dateKey, id) {
        return (dateKey || '') + ':' + (id || '');
      }

      function getMailEntries() {
        try {
          var raw = localStorage.getItem(MAIL_STORAGE_KEY);
          var parsed = raw ? JSON.parse(raw) : [];
          return Array.isArray(parsed) ? parsed : [];
        } catch (e) {
          return [];
        }
      }

      function saveMailEntries(entries) {
        localStorage.setItem(MAIL_STORAGE_KEY, JSON.stringify(entries.slice(0, 200)));
        updateBluelyMailBadge();
      }

      function generateMailId() {
        return 'mail_' + Date.now().toString(36) + '_' + Math.random().toString(36).slice(2, 8);
      }

      function upsertMailEntry(entry) {
        var mail = getMailEntries();
        var idx = -1;
        if (entry.taskKey) {
          idx = mail.findIndex(function (m) {
            return m.taskKey === entry.taskKey && m.type === entry.type;
          });
        }
        var next = Object.assign({
          id: generateMailId(),
          createdAt: Date.now(),
          read: false
        }, entry);
        if (idx >= 0) {
          next.id = mail[idx].id;
          next.read = mail[idx].read;
          next.createdAt = mail[idx].createdAt || next.createdAt;
          mail[idx] = Object.assign({}, mail[idx], next, { updatedAt: Date.now() });
        } else {
          mail.unshift(next);
        }
        saveMailEntries(mail);
        return next;
      }

      function recordOverdueMail(act, moreCount) {
        if (!act || !act.id || !act.dateKey) return;
        upsertMailEntry({
          type: 'overdue',
          taskKey: getScheduleTaskKey(act.dateKey, act.id),
          dateKey: act.dateKey,
          actId: act.id,
          name: act.name || 'Activity',
          when: formatUpcomingWhen(act.dateKey, act.start),
          moreCount: moreCount > 0 ? moreCount : 0,
          body: 'You can do it now!'
        });
      }

      function recordGoalMail(goal) {
        if (!goal || !goal.id) return;
        upsertMailEntry({
          type: 'goal',
          taskKey: 'goal:' + goal.id,
          goalId: goal.id,
          name: goal.title || 'Goal',
          body: goal.notes || 'Reminder on login',
          when: goal.targetDate ? 'Due ' + formatDateLabel(goal.targetDate) : ''
        });
      }

      function recordRewardMail(kind, amount, reason) {
        upsertMailEntry({
          type: kind === 'shards' ? 'shards' : 'points',
          amount: amount,
          name: '+' + amount + ' ' + (kind === 'shards' ? (amount === 1 ? 'shard' : 'shards') : 'points'),
          body: reason || 'Reward',
          when: new Date().toLocaleString(undefined, { month: 'short', day: 'numeric', hour: 'numeric', minute: '2-digit' })
        });
      }

      function getDedupedMailForInbox() {
        var mail = getMailEntries();
        var seenTask = {};
        return mail.filter(function (entry) {
          if (!entry.taskKey) return true;
          if (seenTask[entry.taskKey]) return false;
          seenTask[entry.taskKey] = true;
          return true;
        });
      }

      function getUnreadMailCount() {
        var seen = {};
        return getMailEntries().filter(function (entry) {
          if (entry.read) return false;
          if (entry.taskKey) {
            if (seen[entry.taskKey]) return false;
            seen[entry.taskKey] = true;
          }
          return true;
        }).length;
      }

      function markAllMailRead() {
        var mail = getMailEntries();
        var changed = false;
        mail.forEach(function (entry) {
          if (!entry.read) {
            entry.read = true;
            changed = true;
          }
        });
        if (changed) saveMailEntries(mail);
      }

      function updateBluelyMailBadge() {
        var count = getUnreadMailCount();
        document.querySelectorAll('.app-link-card[data-type="link"]').forEach(function (card) {
          var id = card.getAttribute('data-id');
          var item = getItemById(id);
          if (!isBluelyMailLink(item)) return;
          var badge = card.querySelector('.app-link-mail-badge');
          if (!count) {
            if (badge) badge.remove();
            return;
          }
          if (!badge) {
            badge = document.createElement('span');
            badge.className = 'app-link-mail-badge';
            card.appendChild(badge);
          }
          badge.textContent = count > 9 ? '9+' : String(count);
        });
      }

      function showRewardToast(kind, amount, reason) {
        var stack = document.getElementById('goal-reminder-stack');
        if (!stack || !amount) return;
        var toast = document.createElement('div');
        toast.className = 'app-toast app-toast--reward app-toast--reward-' + (kind === 'shards' ? 'shards' : 'points');
        toast.setAttribute('role', 'status');
        var label = kind === 'shards'
          ? ('+' + amount + ' ' + (amount === 1 ? 'shard' : 'shards'))
          : ('+' + amount + ' points');
        var icon = kind === 'shards' ? '✦' : '★';
        toast.innerHTML =
          '<div class="app-toast-accent" aria-hidden="true"></div>' +
          '<div class="app-toast-inner">' +
            '<div class="app-toast-head">' +
              '<span class="app-toast-badge app-toast-badge--reward" aria-hidden="true">' + icon + '</span>' +
              '<div class="app-toast-copy">' +
                '<span class="app-toast-kicker">Reward</span>' +
                '<strong class="app-toast-title app-toast-title--reward">' + escapeHtml(label) + '</strong>' +
                '<p class="app-toast-meta">' + escapeHtml(reason || 'Reward') + '</p>' +
              '</div>' +
              '<button type="button" class="app-toast-dismiss" aria-label="Dismiss">×</button>' +
            '</div>' +
          '</div>';
        stack.appendChild(toast);
        wireAppToast(toast, { autoHideMs: 9000 });
      }

      function addPoints(amount, reason) {
        var n = parseInt(amount, 10);
        if (isNaN(n) || n <= 0) return;
        setPoints(getPoints() + n);
        recordRewardMail('points', n, reason);
        showRewardToast('points', n, reason);
      }

      function addShards(amount, reason) {
        var n = parseInt(amount, 10);
        if (isNaN(n) || n <= 0) return;
        setShards(getShards() + n);
        recordRewardMail('shards', n, reason);
        showRewardToast('shards', n, reason);
      }

      function openBluelyMailOverlay() {
        var overlay = document.getElementById('bluely-mail-overlay');
        if (!overlay) return;
        markAllMailRead();
        renderBluelyMail();
        overlay.classList.add('is-open');
        overlay.setAttribute('aria-hidden', 'false');
      }

      function closeBluelyMailOverlay() {
        var overlay = document.getElementById('bluely-mail-overlay');
        if (!overlay) return;
        overlay.classList.remove('is-open');
        overlay.setAttribute('aria-hidden', 'true');
        updateBluelyMailBadge();
      }

      function renderBluelyMail() {
        var listEl = document.getElementById('bluely-mail-list');
        var subtitleEl = document.getElementById('bluely-mail-subtitle');
        if (!listEl) return;
        var entries = getDedupedMailForInbox();
        if (subtitleEl) {
          subtitleEl.textContent = entries.length
            ? (entries.length + ' notification' + (entries.length === 1 ? '' : 's'))
            : 'No notifications yet';
        }
        listEl.innerHTML = '';
        if (!entries.length) {
          listEl.innerHTML = '<li class="bluely-mail-empty">When you get overdue alerts or earn points, they will show up here.</li>';
          return;
        }
        entries.forEach(function (entry) {
          var li = document.createElement('li');
          var isTask = entry.type === 'overdue' && entry.dateKey && entry.actId;
          var isGoal = entry.type === 'goal';
          var isPoints = entry.type === 'points';
          var isShards = entry.type === 'shards';
          var typeClass = isTask ? 'overdue' : (isGoal ? 'goal' : (isShards ? 'shards' : (isPoints ? 'points' : 'generic')));
          li.className = 'bluely-mail-item bluely-mail-item--' + typeClass;
          var badgeIcon = isTask ? '!' : (isGoal ? '🎯' : (isShards ? '✦' : (isPoints ? '★' : '•')));
          var kicker = isTask ? 'Overdue' : (isGoal ? 'Goal' : (isShards ? 'Shards' : (isPoints ? 'Points' : 'Notice')));
          var statusLine = '';
          if (isTask) {
            var act = getActivities(entry.dateKey).filter(function (a) { return a.id === entry.actId; })[0];
            if (act && act.status === 'done') statusLine = '<span class="bluely-mail-status bluely-mail-status--done">Completed</span>';
            else statusLine = '<span class="bluely-mail-status bluely-mail-status--warn">Overdue</span>';
          }
          var moreLine = entry.moreCount > 0
            ? '<p class="bluely-mail-more">and ' + entry.moreCount + ' more overdue</p>'
            : '';
          var actions = '';
          if (isTask) {
            actions =
              '<div class="bluely-mail-actions">' +
                '<button type="button" class="app-toast-cta bluely-mail-view-btn" data-date="' + entry.dateKey + '" data-id="' + entry.actId + '">View schedule</button>' +
              '</div>';
          } else if (isGoal) {
            actions = '<div class="bluely-mail-actions"><button type="button" class="app-toast-cta bluely-mail-goals-btn">Open Goals</button></div>';
          }
          li.innerHTML =
            '<span class="bluely-mail-item-badge" aria-hidden="true">' + badgeIcon + '</span>' +
            '<div class="bluely-mail-item-main">' +
              '<span class="bluely-mail-item-kicker">' + kicker + '</span>' +
              '<strong class="bluely-mail-item-title">' + escapeHtml(entry.name || 'Notification') + '</strong>' +
              (entry.when ? '<p class="bluely-mail-item-when">' + escapeHtml(entry.when) + '</p>' : '') +
              (entry.body ? '<p class="bluely-mail-item-body-text">' + escapeHtml(entry.body) + '</p>' : '') +
              moreLine + statusLine +
            '</div>' +
            actions;
          listEl.appendChild(li);
        });
        listEl.querySelectorAll('.bluely-mail-view-btn').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var dateKey = btn.getAttribute('data-date');
            var id = btn.getAttribute('data-id');
            closeBluelyMailOverlay();
            allSchedulesStatusFilter = 'overdue';
            document.querySelectorAll('.all-schedules-chip').forEach(function (chip) {
              chip.classList.toggle('is-active', chip.getAttribute('data-status-filter') === 'overdue');
            });
            playPageTransition(function () {
              setActivePanel('all_schedules');
              renderAllSchedules();
              if (dateKey) currentScheduleDate = dateKey;
            });
          });
        });
        listEl.querySelectorAll('.bluely-mail-goals-btn').forEach(function (btn) {
          btn.addEventListener('click', function () {
            closeBluelyMailOverlay();
            playPageTransition(function () { setActivePanel('goals'); });
          });
        });
      }

      function getLocalDateKey(offsetDays) {
        var d = new Date();
        if (offsetDays) d.setDate(d.getDate() + offsetDays);
        var y = d.getFullYear();
        var m = d.getMonth() + 1;
        var day = d.getDate();
        var pad = function (n) { return (n < 10 ? '0' : '') + n; };
        return y + '-' + pad(m) + '-' + pad(day);
      }

      function getStreak() {
        try {
          var raw = localStorage.getItem(STREAK_STORAGE_KEY);
          if (raw === null) return 0;
          var value = parseInt(raw, 10);
          return isNaN(value) ? 0 : value;
        } catch (e) {
          return 0;
        }
      }

      function setStreak(value) {
        var safe = parseInt(value, 10);
        if (isNaN(safe) || safe < 0) safe = 0;
        localStorage.setItem(STREAK_STORAGE_KEY, String(safe));
        renderStreak();
      }

      function renderStreak() {
        var streakVal = document.getElementById('app-streak-value');
        if (streakVal) streakVal.textContent = String(getStreak());
      }

      function updateDailyStreakOnLogin() {
        var todayKey = getLocalDateKey(0);
        var yesterdayKey = getLocalDateKey(-1);
        var lastLogin = localStorage.getItem(STREAK_LAST_LOGIN_STORAGE_KEY);
        var streak = getStreak();

        if (lastLogin === todayKey) {
          renderStreak();
          return;
        }
        if (lastLogin === yesterdayKey) {
          streak += 1;
        } else {
          streak = 1;
        }
        localStorage.setItem(STREAK_LAST_LOGIN_STORAGE_KEY, todayKey);
        setStreak(streak);
        showStreakLoginOverlay(streak);
      }

      function getUnlockedThemes() {
        try {
          var raw = localStorage.getItem(UNLOCKED_THEMES_STORAGE_KEY);
          if (!raw) return [];
          var parsed = JSON.parse(raw);
          return Array.isArray(parsed) ? parsed : [];
        } catch (e) {
          return [];
        }
      }

      function setUnlockedThemes(list) {
        var safe = (list || []).filter(function (name) {
          return THEME_OPTIONS.indexOf(name) >= 0 && name !== 'ocean';
        });
        localStorage.setItem(UNLOCKED_THEMES_STORAGE_KEY, JSON.stringify(safe));
      }

      function isThemeUnlocked(themeName) {
        if (themeName === 'ocean' || themeName === 'dark') return true;
        return getUnlockedThemes().indexOf(themeName) >= 0;
      }

      function unlockTheme(themeName) {
        if (!themeName || themeName === 'ocean') return;
        var unlocked = getUnlockedThemes();
        if (unlocked.indexOf(themeName) >= 0) return;
        unlocked.push(themeName);
        setUnlockedThemes(unlocked);
        updateThemeLockUI();
      }

      function getThemeLabel(themeName) {
        return THEME_LABELS[themeName] || themeName;
      }

      function getThemeUnlockCost(themeName) {
        return THEME_UNLOCK_COSTS[themeName] || null;
      }

      function updateThemeLockUI() {
        document.querySelectorAll('.custom-style-btn[data-theme]').forEach(function (btn) {
          var theme = btn.getAttribute('data-theme') || 'ocean';
          var locked = !isThemeUnlocked(theme);
          btn.classList.toggle('is-locked', locked);
          btn.setAttribute('aria-disabled', locked ? 'true' : 'false');
        });
      }

      function applyTheme(themeName, options) {
        var theme = THEME_OPTIONS.indexOf(themeName) >= 0 ? themeName : 'ocean';
        if (!isThemeUnlocked(theme)) theme = 'ocean';
        var instant = options && options.instant;
        var bgStack = document.getElementById('theme-bg-stack');
        if (bgStack && instant) bgStack.classList.add('is-instant');
        THEME_OPTIONS.forEach(function (name) {
          document.body.classList.toggle('theme-' + name, name === theme);
        });
        document.querySelectorAll('.custom-style-btn[data-theme]').forEach(function (btn) {
          btn.classList.toggle('is-active', btn.getAttribute('data-theme') === theme);
        });
        if (bgStack && instant) {
          requestAnimationFrame(function () {
            bgStack.classList.remove('is-instant');
          });
        }
      }

      function saveTheme(themeName) {
        var safeTheme = THEME_OPTIONS.indexOf(themeName) >= 0 ? themeName : 'ocean';
        if (!isThemeUnlocked(safeTheme)) safeTheme = 'ocean';
        localStorage.setItem(THEME_STORAGE_KEY, safeTheme);
      }

      function clearStylePurchaseError() {
        if (!stylePurchaseError) return;
        stylePurchaseError.hidden = true;
        stylePurchaseError.textContent = '';
      }

      function showStylePurchaseError(message) {
        if (!stylePurchaseError) return;
        stylePurchaseError.textContent = message;
        stylePurchaseError.hidden = false;
      }

      function closeStylePurchaseOverlay() {
        if (!stylePurchaseOverlay) return;
        stylePurchaseOverlay.classList.remove('is-open');
        stylePurchaseOverlay.setAttribute('aria-hidden', 'true');
        pendingStylePurchaseTheme = null;
        clearStylePurchaseError();
      }

      function openStylePurchaseOverlay(themeName) {
        if (!stylePurchaseOverlay || isThemeUnlocked(themeName)) return;
        var cost = getThemeUnlockCost(themeName);
        if (!cost) return;
        pendingStylePurchaseTheme = themeName;
        var label = getThemeLabel(themeName);
        if (stylePurchaseTitle) {
          stylePurchaseTitle.textContent = 'Do you want to buy ' + label + '?';
        }
        if (stylePurchaseCost) {
          stylePurchaseCost.textContent = cost.points + ' points or ' + cost.shards + ' shards';
        }
        clearStylePurchaseError();
        stylePurchaseOverlay.classList.add('is-open');
        stylePurchaseOverlay.setAttribute('aria-hidden', 'false');
      }

      function completeStylePurchase(themeName) {
        unlockTheme(themeName);
        closeStylePurchaseOverlay();
        saveTheme(themeName);
        applyTheme(themeName);
      }

      function tryPurchaseThemeWithPoints(themeName) {
        var cost = getThemeUnlockCost(themeName);
        if (!cost) return;
        if (getPoints() < cost.points) {
          showStylePurchaseError('Not enough points. You need ' + cost.points + '.');
          return;
        }
        setPoints(getPoints() - cost.points);
        completeStylePurchase(themeName);
      }

      function tryPurchaseThemeWithShards(themeName) {
        var cost = getThemeUnlockCost(themeName);
        if (!cost) return;
        if (getShards() < cost.shards) {
          showStylePurchaseError('Not enough shards. You need ' + cost.shards + '.');
          return;
        }
        setShards(getShards() - cost.shards);
        completeStylePurchase(themeName);
      }

      function initThemeControls() {
        updateThemeLockUI();
        var saved = localStorage.getItem(THEME_STORAGE_KEY) || 'ocean';
        if (THEME_OPTIONS.indexOf(saved) < 0) saved = 'ocean';
        if (!isThemeUnlocked(saved)) saved = 'ocean';
        applyTheme(saved, { instant: true });
        if (saved !== (localStorage.getItem(THEME_STORAGE_KEY) || 'ocean')) {
          saveTheme(saved);
        }
        document.querySelectorAll('.custom-style-btn[data-theme]').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var theme = btn.getAttribute('data-theme') || 'ocean';
            if (!isThemeUnlocked(theme)) {
              openStylePurchaseOverlay(theme);
              return;
            }
            saveTheme(theme);
            applyTheme(theme);
          });
        });
        if (stylePurchasePointsBtn) {
          stylePurchasePointsBtn.addEventListener('click', function () {
            if (!pendingStylePurchaseTheme) return;
            tryPurchaseThemeWithPoints(pendingStylePurchaseTheme);
          });
        }
        if (stylePurchaseShardsBtn) {
          stylePurchaseShardsBtn.addEventListener('click', function () {
            if (!pendingStylePurchaseTheme) return;
            tryPurchaseThemeWithShards(pendingStylePurchaseTheme);
          });
        }
        if (stylePurchaseCancelBtn) {
          stylePurchaseCancelBtn.addEventListener('click', closeStylePurchaseOverlay);
        }
        if (stylePurchaseOverlay) {
          stylePurchaseOverlay.addEventListener('click', function (e) {
            if (e.target === stylePurchaseOverlay) closeStylePurchaseOverlay();
          });
        }
      }

      function showStreakLoginOverlay(streak) {
        if (!streakLoginOverlay || !streakLoginTitle) return;
        if (streakLoginHideTimer) clearTimeout(streakLoginHideTimer);
        streakLoginTitle.textContent = '🔥 Your ' + streak + ' day streak! Well done!';
        streakLoginOverlay.classList.add('is-open');
        streakLoginOverlay.setAttribute('aria-hidden', 'false');
        streakLoginHideTimer = setTimeout(function () {
          streakLoginOverlay.classList.remove('is-open');
          streakLoginOverlay.setAttribute('aria-hidden', 'true');
        }, 2200);
      }

      function renderDailyMotivation() {
        var motivationEl = document.getElementById('daily-motivation-text');
        if (!motivationEl) return;
        var messages = [
          'The 24-Hour Equalizer: Every billionaire and every beginner gets the same 1,440 minutes. The difference is not talent; it is the calendar. Respect the block you built for yourself.',
          'Discipline Over Desire: Motivation gets you to write the schedule. Discipline gets you to pick up the pen when the alarm goes off. Do not wait for a feeling; follow the plan.',
          'The Cost of "Later": Procrastination is a debt you pay with interest. When you skip a task today, you steal from your peace tomorrow. Pay the price now.',
          'Brick by Brick: You do not build a wall in a day. You lay one brick as perfectly as a brick can be laid. Your schedule is just a series of bricks. Lay this one.',
          'The Silent Promise: A schedule is a contract with your future self. If you would not break a promise to a friend, why are you comfortable breaking one to yourself?',
          'Win the Morning: How you handle the first hour dictates the next fifteen. If you win the battle against the snooze button, you have already started a victory streak.',
          'Focus is a Muscle: The world wants your attention. Your schedule protects it. Stay in the lane you chose before the noise started.',
          'The Power of No: Your schedule is not a cage; it is a shield. It gives you the power to say no to the unimportant so you can say yes to your legacy.',
          'The Beautiful Struggle: Comfort is the graveyard of growth. If it feels heavy, it is because you are leveling up. Embrace the friction.',
          'Write Your Own Script: If you do not decide who you are, the world will decide for you. Be the author, not the reader, of your own life.',
          'Failure is Data: A mistake is not a stop sign; it is a rerouting signal. Analyze the why, adjust the how, and go again.',
          'The Comparison Trap: Comparison is the thief of joy. The only person you should try to beat is the person you were yesterday.',
          'Resilience is Quiet: Strength is not always a loud roar. Sometimes it is the quiet voice at the end of the day saying, "I will try again tomorrow."',
          'Your Circle Matters: You are the average of the five people you spend the most time with. Choose giants, and you will learn to walk tall.',
          'Gratitude as Fuel: You cannot build a great future if you hate your present. Find one thing that works, and use that energy to fix what does not.',
          'The Long Game: We overestimate what we can do in a month and underestimate what we can do in a decade. Stay patient. Stay hungry.'
        ];
        if (!messages.length) return;

        var todayKey = getLocalDateKey(0);
        var savedDate = localStorage.getItem(MOTIVATION_DATE_STORAGE_KEY);
        var savedIndexRaw = localStorage.getItem(MOTIVATION_INDEX_STORAGE_KEY);
        var index = savedIndexRaw !== null ? parseInt(savedIndexRaw, 10) : -1;

        if (savedDate !== todayKey || isNaN(index) || index < 0 || index >= messages.length) {
          index = Math.floor(Math.random() * messages.length);
          localStorage.setItem(MOTIVATION_DATE_STORAGE_KEY, todayKey);
          localStorage.setItem(MOTIVATION_INDEX_STORAGE_KEY, String(index));
        }
        motivationEl.textContent = messages[index];
      }

      function generateActivityId() {
        return 'act_' + Date.now().toString(36) + '_' + Math.random().toString(36).slice(2, 8);
      }

      function normalizePriority(priority) {
        if (priority === 'high' || priority === 'medium') return priority;
        if (priority === 'low') return 'none';
        return 'none';
      }

      function getPriorityRank(priority) {
        var normalized = normalizePriority(priority);
        if (normalized === 'high') return 0;
        if (normalized === 'medium') return 1;
        return 2;
      }

      function getPriorityLabel(priority) {
        var normalized = normalizePriority(priority);
        if (normalized === 'high') return 'High';
        if (normalized === 'medium') return 'Medium';
        return 'None';
      }

      var ACTIVITY_PRIORITY_OPTIONS = [
        { value: 'none', label: 'None' },
        { value: 'high', label: 'High' },
        { value: 'medium', label: 'Medium' }
      ];

      function buildPrioritySelectHtml(dateKey, id, selectedPriority, className) {
        var normalized = normalizePriority(selectedPriority);
        var selectClass = className || 'schedule-priority-select';
        return '<select class="' + selectClass + '" data-date="' + dateKey + '" data-id="' + id + '">' +
          '<option value="none"' + (normalized === 'none' ? ' selected' : '') + '>None</option>' +
          '<option value="high"' + (normalized === 'high' ? ' selected' : '') + '>High</option>' +
          '<option value="medium"' + (normalized === 'medium' ? ' selected' : '') + '>Medium</option>' +
          '</select>';
      }

      function buildPriorityPickerHtml(dateKey, id, selectedPriority) {
        var normalized = normalizePriority(selectedPriority);
        var optionsHtml = ACTIVITY_PRIORITY_OPTIONS.map(function (opt) {
          var selected = opt.value === normalized;
          return '<button type="button" class="all-schedules-picker-option' + (selected ? ' is-selected' : '') +
            '" role="option" aria-selected="' + (selected ? 'true' : 'false') +
            '" data-picker-value="' + opt.value + '">' +
            '<span class="all-schedules-picker-option-label">' + opt.label + '</span>' +
            '</button>';
        }).join('');
        return '<div class="activity-priority-picker" data-date="' + dateKey + '" data-id="' + id + '">' +
          '<button type="button" class="activity-priority-picker-trigger" aria-haspopup="listbox" aria-expanded="false">' +
            '<span class="activity-priority-picker-value schedule-priority-badge priority-' + normalized + '">' +
              getPriorityLabel(normalized) +
            '</span>' +
            '<span class="activity-priority-picker-chevron" aria-hidden="true">▾</span>' +
          '</button>' +
          '<div class="activity-priority-picker-menu picker-menu--scroll-3" role="listbox" aria-label="Priority" hidden>' +
            optionsHtml +
          '</div>' +
        '</div>';
      }

      function normalizeActivity(act) {
        var item = act && typeof act === 'object' ? act : {};
        if (!item.id) item.id = generateActivityId();
        if (item.status !== 'in_progress' && item.status !== 'done') item.status = 'pending';
        if (!item.start) item.start = '00:00';
        if (!item.name) item.name = 'Activity';
        if (!item.color) item.color = '#38bdf8';
        item.priority = normalizePriority(item.priority);
        if (typeof item.elapsedMs !== 'number' || isNaN(item.elapsedMs)) item.elapsedMs = 0;
        if (typeof item.progressStartedAt !== 'number' || isNaN(item.progressStartedAt)) item.progressStartedAt = null;
        return item;
      }

      function formatDuration(ms) {
        var totalSeconds = Math.max(0, Math.floor(ms / 1000));
        var h = Math.floor(totalSeconds / 3600);
        var m = Math.floor((totalSeconds % 3600) / 60);
        var s = totalSeconds % 60;
        var pad = function (v) { return (v < 10 ? '0' : '') + v; };
        return pad(h) + ':' + pad(m) + ':' + pad(s);
      }

      function getActivityElapsedMs(act, nowMs) {
        var base = act && typeof act.elapsedMs === 'number' ? act.elapsedMs : 0;
        if (act && act.status === 'in_progress' && act.progressStartedAt) {
          return base + Math.max(0, (nowMs || Date.now()) - act.progressStartedAt);
        }
        return base;
      }

      function showCompletionOverlay(name, elapsedMs) {
        if (!scheduleCompleteOverlay || !scheduleCompleteText) return;
        if (scheduleCompleteHideTimer) clearTimeout(scheduleCompleteHideTimer);
        scheduleCompleteText.textContent = 'You completed "' + (name || 'Activity') + '" in ' + formatDuration(elapsedMs) + '.';
        scheduleCompleteOverlay.classList.add('is-open');
        scheduleCompleteOverlay.setAttribute('aria-hidden', 'false');
        scheduleCompleteHideTimer = setTimeout(function () {
          scheduleCompleteOverlay.classList.remove('is-open');
          scheduleCompleteOverlay.setAttribute('aria-hidden', 'true');
        }, 1900);
      }

      function initPlinkoGame() {
        // Games removed
        return;
      }

      function getDomain(urlStr) {
        try {
          var u = new URL(urlStr);
          return u.hostname.replace(/^www\./, '');
        } catch (e) {
          return urlStr;
        }
      }

      function getFaviconUrl(urlStr) {
        var domain = getDomain(urlStr);
        return 'https://www.google.com/s2/favicons?domain=' + encodeURIComponent(domain) + '&sz=64';
      }

      function getAppIconUrl(item) {
        if (!item || item.type !== 'link') return '';
        if (isBluelyMailLink(item)) return BLUELY_MAIL_ICON_SVG;
        if (isBluelyStoreLink(item)) return BLUELY_STORE_ICON_SVG;
        if (normalizeComparableUrl(item.url) === normalizeComparableUrl('https://docs.google.com/')) {
          return GOOGLE_DOCS_ICON_PATH;
        }
        if (normalizeComparableUrl(item.url) === normalizeComparableUrl('https://docs.google.com/presentation')) {
          return GOOGLE_SLIDES_ICON_PATH;
        }
        if (normalizeComparableUrl(item.url) === normalizeComparableUrl('https://mail.google.com/')) {
          return GMAIL_ICON_PATH;
        }
        return getFaviconUrl(item.url);
      }

      function isGoogleSlidesItem(item) {
        if (!item || item.type !== 'link') return false;
        return normalizeComparableUrl(item.url) === normalizeComparableUrl('https://docs.google.com/presentation');
      }

      function hasAppInMenu(url) {
        if (!url) return false;
        var target = normalizeComparableUrl(url);
        return getLinks().some(function (item) {
          return item.type === 'link' && normalizeComparableUrl(item.url) === target;
        });
      }

      function closeStoreAppOverlay() {
        var overlay = document.getElementById('store-app-overlay');
        if (!overlay) return;
        overlay.classList.remove('is-open');
        overlay.setAttribute('aria-hidden', 'true');
        activeStoreApp = null;
      }

      function openStoreAppOverlay(app) {
        if (!app) return;
        var overlay = document.getElementById('store-app-overlay');
        var titleEl = document.getElementById('store-app-title');
        var descEl = document.getElementById('store-app-description');
        var logoEl = document.getElementById('store-app-logo');
        var addBtn = document.getElementById('store-app-add-btn');
        if (!overlay || !titleEl || !descEl || !logoEl || !addBtn) return;
        activeStoreApp = app;
        titleEl.textContent = app.name || 'App';
        descEl.textContent = app.description || 'Add this app to your menu.';
        logoEl.src = getFaviconUrl(app.url);
        logoEl.alt = app.name || 'App logo';
        var exists = hasAppInMenu(app.url);
        addBtn.disabled = exists;
        addBtn.textContent = exists ? 'Already in Menu' : 'Add to Menu';
        overlay.classList.add('is-open');
        overlay.setAttribute('aria-hidden', 'false');
      }

      function renderTidalStore() {
        var usefulSection = document.getElementById('tidal-store-useful-section');
        var discoverSection = document.getElementById('tidal-store-discover-section');
        var allSection = document.getElementById('tidal-store-all-section');
        var usefulGrid = document.getElementById('tidal-store-useful-grid');
        var discoverGrid = document.getElementById('tidal-store-discover-grid');
        var allGrid = document.getElementById('tidal-store-all-grid');
        var searchEl = document.getElementById('tidal-store-search');
        var allAppsBtn = document.getElementById('tidal-store-all-apps-btn');
        if (!usefulSection || !discoverSection || !allSection || !usefulGrid || !discoverGrid || !allGrid || !allAppsBtn) return;

        var query = searchEl ? (searchEl.value || '').trim().toLowerCase() : '';
        var filtered = TIDAL_STORE_APPS.filter(function (app) {
          if (!query) return true;
          return app.name.toLowerCase().indexOf(query) >= 0 || app.url.toLowerCase().indexOf(query) >= 0;
        });

        function makeCard(app) {
          var btn = document.createElement('button');
          btn.type = 'button';
          btn.className = 'folder-view-app-btn tidal-store-app-btn';
          btn.innerHTML = '<img class="folder-view-app-icon" src="' + getFaviconUrl(app.url) + '" alt="">' +
            '<span class="folder-view-app-name">' + app.name + '</span>';
          btn.addEventListener('click', function () {
            openStoreAppOverlay(app);
          });
          return btn;
        }

        usefulGrid.innerHTML = '';
        discoverGrid.innerHTML = '';
        allGrid.innerHTML = '';
        filtered.forEach(function (app) {
          if (app.section === 'useful') usefulGrid.appendChild(makeCard(app));
          else discoverGrid.appendChild(makeCard(app));
          allGrid.appendChild(makeCard(app));
        });

        if (!usefulGrid.children.length) usefulGrid.innerHTML = '<p class="upcoming-empty">No apps found.</p>';
        if (!discoverGrid.children.length) discoverGrid.innerHTML = '<p class="upcoming-empty">No apps found.</p>';
        if (!allGrid.children.length) allGrid.innerHTML = '<p class="upcoming-empty">No apps found.</p>';

        usefulSection.hidden = tidalStoreShowAll;
        discoverSection.hidden = tidalStoreShowAll;
        allSection.hidden = !tidalStoreShowAll;
        allAppsBtn.classList.toggle('is-active', tidalStoreShowAll);
        allAppsBtn.textContent = tidalStoreShowAll ? 'Section view' : 'All apps';
      }

      function getItemById(itemId) {
        if (!itemId) return null;
        var links = getLinks();
        for (var i = 0; i < links.length; i++) {
          if (links[i].id === itemId) return links[i];
        }
        return null;
      }

      function deleteLibraryItem(itemId) {
        if (!itemId) return;
        var links = getLinks();
        var target = links.find(function (item) { return item.id === itemId; });
        if (!target || isProtectedAppLink(target)) return;
        var next = links
          .filter(function (item) { return item.id !== itemId; })
          .map(function (item) {
            if (target.type === 'folder' && item.folderId === itemId) {
              item.folderId = null;
            }
            return item;
          });
        saveLinks(next);
      }

      function setItemFolder(itemId, folderId) {
        if (!itemId) return false;
        var links = getLinks();
        var moving = links.find(function (i) { return i.id === itemId; });
        if (folderId && moving && isProtectedAppLink(moving)) return false;
        var folder = folderId ? links.find(function (i) { return i.id === folderId && i.type === 'folder'; }) : null;
        var changed = false;
        links = links.map(function (item) {
          if (item.id !== itemId) return item;
          if (item.type !== 'link') return item;
          if (isProtectedAppLink(item) && folderId) return item;
          if (folderId && !folder) return item;
          changed = true;
          item.folderId = folderId || null;
          return item;
        });
        if (!changed) return false;
        saveLinks(links);
        return true;
      }

      function swapRootItems(firstId, secondId) {
        if (!firstId || !secondId || firstId === secondId) return false;
        var links = getLinks();
        var roots = links.filter(function (item) { return !item.folderId; });
        var children = links.filter(function (item) { return !!item.folderId; });
        var firstIndex = roots.findIndex(function (item) { return item.id === firstId; });
        var secondIndex = roots.findIndex(function (item) { return item.id === secondId; });
        if (firstIndex < 0 || secondIndex < 0) return false;
        var tmp = roots[firstIndex];
        roots[firstIndex] = roots[secondIndex];
        roots[secondIndex] = tmp;
        saveLinks(roots.concat(children));
        return true;
      }

      function captureGridPositions(grid) {
        var map = {};
        if (!grid) return map;
        grid.querySelectorAll('.app-link-card[data-id]').forEach(function (card) {
          var id = card.getAttribute('data-id');
          if (!id) return;
          map[id] = card.getBoundingClientRect();
        });
        return map;
      }

      function animateGridReorder(grid, previousPositions) {
        if (!grid) return;
        requestAnimationFrame(function () {
          grid.querySelectorAll('.app-link-card[data-id]').forEach(function (card) {
            var id = card.getAttribute('data-id');
            var prev = previousPositions[id];
            if (!prev) return;
            var now = card.getBoundingClientRect();
            var dx = prev.left - now.left;
            var dy = prev.top - now.top;
            if (Math.abs(dx) < 1 && Math.abs(dy) < 1) return;
            card.style.transition = 'none';
            card.style.transform = 'translate(' + dx + 'px, ' + dy + 'px)';
            requestAnimationFrame(function () {
              card.style.transition = 'transform 220ms cubic-bezier(0.22, 1, 0.36, 1)';
              card.style.transform = '';
              setTimeout(function () {
                card.style.transition = '';
              }, 240);
            });
          });
        });
      }

      function closeFolderViewOverlay() {
        var overlay = document.getElementById('folder-view-overlay');
        if (!overlay) return;
        overlay.classList.remove('is-open');
        overlay.setAttribute('aria-hidden', 'true');
        currentFolderViewId = null;
      }

      function renderFolderViewOverlay(folderId) {
        var overlay = document.getElementById('folder-view-overlay');
        var titleEl = document.getElementById('folder-view-title');
        var listEl = document.getElementById('folder-view-list');
        if (!overlay || !titleEl || !listEl) return;
        var links = getLinks();
        var folder = links.find(function (item) { return item.id === folderId && item.type === 'folder'; });
        if (!folder) return;
        currentFolderViewId = folderId;
        titleEl.textContent = folder.name || 'Folder';
        listEl.innerHTML = '';
        var children = links.filter(function (item) { return item.type === 'link' && item.folderId === folderId; });
        if (!children.length) {
          listEl.innerHTML = '<li class="folder-view-empty">No apps in this folder yet.</li>';
        } else {
          children.forEach(function (item) {
            var li = document.createElement('li');
            li.className = 'folder-view-item';
            var appBtn = document.createElement('button');
            appBtn.type = 'button';
            appBtn.className = 'folder-view-app-btn';
            appBtn.innerHTML =
              '<img class="folder-view-app-icon' + (isGoogleSlidesItem(item) ? ' folder-view-app-icon-slides' : '') + '" src="' + getAppIconUrl(item) + '" alt="">' +
              '<span class="folder-view-app-name">' + (item.name || getDomain(item.url)) + '</span>';
            appBtn.addEventListener('click', function () {
              if (appEditMode) {
                openAppEditOverlay(item.id);
                return;
              }
              if (isBluelyMailLink(item)) {
                closeFolderViewOverlay();
                openBluelyMailOverlay();
                return;
              }
              if (isBluelyStoreLink(item)) {
                closeFolderViewOverlay();
                playPageTransition(function () {
                  setActivePanel('tidal_store');
                });
                return;
              }
              window.open(item.url, '_blank', 'noopener,noreferrer');
            });
            li.appendChild(appBtn);

            var takeOutBtn = document.createElement('button');
            takeOutBtn.type = 'button';
            takeOutBtn.className = 'folder-view-remove-btn';
            takeOutBtn.textContent = 'Take out';
            takeOutBtn.addEventListener('click', function (e) {
              e.preventDefault();
              e.stopPropagation();
              if (!setItemFolder(item.id, null)) return;
              renderLinks();
              renderFolderViewOverlay(folderId);
            });
            li.appendChild(takeOutBtn);
            listEl.appendChild(li);
          });
        }
        overlay.classList.add('is-open');
        overlay.setAttribute('aria-hidden', 'false');
      }

      function closeAppEditOverlay() {
        var overlay = document.getElementById('app-edit-overlay');
        var renameRow = document.getElementById('app-edit-rename-row');
        var renameBtn = document.getElementById('app-edit-rename-btn');
        var deleteBtn = document.getElementById('app-edit-delete-btn');
        if (!overlay) return;
        if (renameRow) renameRow.hidden = true;
        if (renameBtn) renameBtn.hidden = false;
        if (deleteBtn) deleteBtn.hidden = false;
        overlay.classList.remove('is-open');
        overlay.setAttribute('aria-hidden', 'true');
        appEditTargetId = null;
      }

      function openAppEditOverlay(itemId) {
        if (!appEditMode) return;
        var item = getItemById(itemId);
        var overlay = document.getElementById('app-edit-overlay');
        var titleEl = document.getElementById('app-edit-title');
        var subtitleEl = document.getElementById('app-edit-subtitle');
        var renameInput = document.getElementById('app-edit-rename-input');
        var renameRow = document.getElementById('app-edit-rename-row');
        var renameBtn = document.getElementById('app-edit-rename-btn');
        var deleteBtn = document.getElementById('app-edit-delete-btn');
        if (!item || !overlay || !titleEl || !subtitleEl || !renameInput || !renameRow || !renameBtn) return;
        appEditTargetId = itemId;
        var protectedLocked = isProtectedAppLink(item);
        if (deleteBtn) deleteBtn.hidden = protectedLocked;
        renameBtn.hidden = protectedLocked;
        titleEl.textContent = isBluelyStoreLink(item)
          ? 'Bluely Store'
          : (isBluelyMailLink(item) ? 'Bluely Mail' : (item.type === 'folder' ? 'Edit folder' : 'Edit app'));
        subtitleEl.textContent = protectedLocked
          ? 'Built-in — you can reorder it on the grid, but it can’t be renamed, deleted, or moved into a folder.'
          : item.name || (item.type === 'folder' ? 'Folder' : getDomain(item.url));
        renameInput.value = item.name || '';
        renameRow.hidden = true;
        renameBtn.textContent = item.type === 'folder' ? 'Rename folder' : 'Rename app';
        overlay.classList.add('is-open');
        overlay.setAttribute('aria-hidden', 'false');
      }

      function setEditMode(on) {
        appEditMode = !!on;
        var editBtn = document.getElementById('edit-apps-btn');
        var grid = document.getElementById('app-links-grid');
        if (editBtn) {
          editBtn.classList.toggle('is-active', appEditMode);
          editBtn.setAttribute('aria-label', appEditMode ? 'Done editing' : 'Edit apps');
          editBtn.setAttribute('title', appEditMode ? 'Done editing' : 'Edit apps');
        }
        if (grid) {
          grid.classList.toggle('is-editing', appEditMode);
        }
        if (!appEditMode) {
          var grid = document.getElementById('app-links-grid');
          if (grid) grid.classList.remove('is-drag-active');
          closeAppEditOverlay();
        }
        renderLinks();
      }

      function loadLauncherPageIndex() {
        var n = parseInt(localStorage.getItem(LAUNCHER_PAGE_STORAGE_KEY), 10);
        return isNaN(n) || n < 0 ? 0 : n;
      }

      function saveLauncherPageIndex() {
        localStorage.setItem(LAUNCHER_PAGE_STORAGE_KEY, String(launcherPageIndex));
      }

      function getLauncherPageCount(itemCount) {
        return Math.max(1, Math.ceil(itemCount / LAUNCHER_ITEMS_PER_PAGE));
      }

      function clampLauncherPageIndex(itemCount) {
        var maxPage = getLauncherPageCount(itemCount) - 1;
        if (launcherPageIndex > maxPage) launcherPageIndex = maxPage;
        if (launcherPageIndex < 0) launcherPageIndex = 0;
        saveLauncherPageIndex();
      }

      function goToLauncherPageForRootIndex(rootIndex) {
        launcherPageIndex = Math.floor(rootIndex / LAUNCHER_ITEMS_PER_PAGE);
        saveLauncherPageIndex();
      }

      function setLauncherPage(nextIndex, itemCount) {
        var maxPage = getLauncherPageCount(itemCount) - 1;
        var safe = Math.max(0, Math.min(nextIndex, maxPage));
        if (safe === launcherPageIndex) return;
        launcherPageDirection = safe > launcherPageIndex ? 1 : -1;
        launcherPageIndex = safe;
        saveLauncherPageIndex();
        renderLinks();
      }

      function animateLauncherPageChange(done) {
        var viewport = document.getElementById('launcher-grid-viewport');
        if (!viewport) {
          done();
          return;
        }
        var dirClass = launcherPageDirection >= 0 ? 'is-page-forward' : 'is-page-backward';
        viewport.classList.add('is-page-exit', dirClass);
        window.setTimeout(function () {
          done();
          viewport.classList.remove('is-page-exit', dirClass);
          viewport.classList.add('is-page-enter', dirClass);
          requestAnimationFrame(function () {
            window.setTimeout(function () {
              viewport.classList.remove('is-page-enter', dirClass);
            }, LAUNCHER_PAGE_TRANSITION_MS);
          });
        }, LAUNCHER_PAGE_TRANSITION_MS);
      }

      function changeLauncherPage(delta) {
        var rootCount = getLinks().filter(function (item) { return !item.folderId; }).length;
        setLauncherPage(launcherPageIndex + delta, rootCount);
      }

      function updateLauncherPagerUI(pageCount, currentPage) {
        var pager = document.getElementById('launcher-pager');
        var prev = document.getElementById('launcher-pager-prev');
        var next = document.getElementById('launcher-pager-next');
        var currentEl = document.getElementById('launcher-pager-current');
        var totalEl = document.getElementById('launcher-pager-total');
        if (!pager) return;
        if (pageCount <= 1) {
          pager.classList.add('is-inactive');
          pager.setAttribute('aria-hidden', 'true');
          return;
        }
        pager.classList.remove('is-inactive');
        pager.setAttribute('aria-hidden', 'false');
        if (currentEl) currentEl.textContent = String(currentPage + 1);
        if (totalEl) totalEl.textContent = String(pageCount);
        if (prev) prev.disabled = currentPage <= 0;
        if (next) next.disabled = currentPage >= pageCount - 1;
      }

      function renderLinks() {
        var grid = document.getElementById('app-links-grid');
        var links = getLinks();
        var rootItems = links.filter(function (item) { return !item.folderId; });
        if (!grid) return;
        clampLauncherPageIndex(rootItems.length);
        var pageCount = getLauncherPageCount(rootItems.length);
        var pageStart = launcherPageIndex * LAUNCHER_ITEMS_PER_PAGE;
        var pageItems = rootItems.slice(pageStart, pageStart + LAUNCHER_ITEMS_PER_PAGE);
        updateLauncherPagerUI(pageCount, launcherPageIndex);
        var pageChanged = lastLauncherRenderedPage !== -1 && lastLauncherRenderedPage !== launcherPageIndex;

        function paintLauncherPage() {
          lastLauncherRenderedPage = launcherPageIndex;
          var previousPositions = captureGridPositions(grid);
          grid.classList.toggle('is-editing', appEditMode);
          grid.innerHTML = '';
          pageItems.forEach(function (item) {
          var card = document.createElement('button');
          card.type = 'button';
          card.className = 'app-link-card';
          card.setAttribute('data-id', item.id);
          card.setAttribute('data-type', item.type);
          card.setAttribute('title', item.type === 'folder' ? (item.name || 'Folder') : item.url);
          if (item.type === 'folder') card.classList.add('app-link-folder');
          if (appEditMode) card.classList.add('app-link-card-editing');

          var iconWrap = document.createElement('span');
          iconWrap.className = 'app-link-icon-wrap';
          if (item.type === 'folder') {
            iconWrap.classList.add('app-link-icon-wrap--folder');
            var folderIcon = document.createElement('span');
            folderIcon.className = 'app-link-folder-icon';
            folderIcon.textContent = '📁';
            iconWrap.appendChild(folderIcon);
          } else {
            var img = document.createElement('img');
            img.src = getAppIconUrl(item);
            img.alt = '';
            img.className = 'app-link-icon';
            if (isGoogleSlidesItem(item)) img.classList.add('app-link-icon-slides');
            iconWrap.appendChild(img);
          }
          card.appendChild(iconWrap);

          var nameEl = document.createElement('span');
          nameEl.className = 'app-link-name';
          nameEl.textContent = item.name || (item.type === 'folder' ? 'Folder' : getDomain(item.url));
          card.appendChild(nameEl);

          if (item.type === 'folder') {
            var folderCount = links.filter(function (child) { return child.folderId === item.id; }).length;
            var countEl = document.createElement('span');
            countEl.className = 'app-link-folder-count';
            countEl.textContent = folderCount + ' app' + (folderCount === 1 ? '' : 's');
            card.appendChild(countEl);
          }

          if (appEditMode) {
            var editBadge = document.createElement('span');
            editBadge.className = 'app-link-edit-badge';
            editBadge.textContent = 'Edit';
            card.appendChild(editBadge);
          }

          if (appEditMode) {
            card.draggable = true;
            card.addEventListener('dragstart', function () {
              draggedLinkId = item.id;
              grid.classList.add('is-drag-active');
              card.classList.add('is-dragging');
            });
            card.addEventListener('dragend', function () {
              draggedLinkId = null;
              grid.classList.remove('is-drag-active');
              card.classList.remove('is-dragging');
              grid.querySelectorAll('.app-link-folder.is-drop-target, .app-link-card.is-swap-target').forEach(function (el) {
                el.classList.remove('is-drop-target');
                el.classList.remove('is-swap-target');
              });
            });
            card.addEventListener('dragover', function (e) {
              if (!draggedLinkId) return;
              if (draggedLinkId === item.id) return;
              e.preventDefault();
              var draggedItem = getItemById(draggedLinkId);
              if (item.type === 'folder' && draggedItem && draggedItem.type === 'link' && !isBluelyStoreLink(draggedItem) && !isBluelyMailLink(draggedItem)) {
                card.classList.add('is-drop-target');
              } else {
                card.classList.add('is-swap-target');
              }
            });
            card.addEventListener('dragleave', function () {
              card.classList.remove('is-drop-target');
              card.classList.remove('is-swap-target');
            });
            card.addEventListener('drop', function (e) {
              if (!draggedLinkId) return;
              if (draggedLinkId === item.id) return;
              e.preventDefault();
              var draggedItem = getItemById(draggedLinkId);
              card.classList.remove('is-drop-target');
              card.classList.remove('is-swap-target');
              var changed = false;
              if (item.type === 'folder' && draggedItem && draggedItem.type === 'link' && !isBluelyStoreLink(draggedItem) && !isBluelyMailLink(draggedItem)) {
                changed = setItemFolder(draggedLinkId, item.id);
              } else {
                changed = swapRootItems(draggedLinkId, item.id);
              }
              if (changed) {
                grid.classList.remove('is-drag-active');
                renderLinks();
                if (currentFolderViewId === item.id) renderFolderViewOverlay(item.id);
              }
              draggedLinkId = null;
            });
          }

          card.addEventListener('click', function () {
            if (appEditMode) {
              openAppEditOverlay(item.id);
              return;
            }
            if (item.type === 'folder') {
              renderFolderViewOverlay(item.id);
              return;
            }
            if (isBluelyMailLink(item)) {
              openBluelyMailOverlay();
              return;
            }
            if (isBluelyStoreLink(item)) {
              playPageTransition(function () {
                setActivePanel('tidal_store');
              });
              return;
            }
            window.open(item.url, '_blank', 'noopener,noreferrer');
          });

          grid.appendChild(card);
          });
          updateBluelyMailBadge();
          animateGridReorder(grid, previousPositions);
        }

        if (pageChanged) {
          animateLauncherPageChange(paintLauncherPage);
          return;
        }
        paintLauncherPage();
      }

      function getAllActivitiesByDate() {
        try {
          var raw = localStorage.getItem(ACTIVITIES_STORAGE_KEY);
          var all = raw ? JSON.parse(raw) : {};
          var changed = false;
          Object.keys(all).forEach(function (dateKey) {
            var list = Array.isArray(all[dateKey]) ? all[dateKey] : [];
            all[dateKey] = list.map(function (act) {
              var normalized = normalizeActivity(act);
              if (!act || !act.id || !act.status) changed = true;
              return normalized;
            });
          });
          if (changed) {
            localStorage.setItem(ACTIVITIES_STORAGE_KEY, JSON.stringify(all));
          }
          return all;
        } catch (e) {
          return {};
        }
      }

      function toDateTimeMs(dateKey, time24) {
        if (!dateKey || !time24) return NaN;
        var dParts = dateKey.split('-');
        var tParts = time24.split(':');
        if (dParts.length !== 3 || tParts.length < 2) return NaN;
        var y = parseInt(dParts[0], 10);
        var m = parseInt(dParts[1], 10) - 1;
        var d = parseInt(dParts[2], 10);
        var h = parseInt(tParts[0], 10);
        var min = parseInt(tParts[1], 10);
        if ([y, m, d, h, min].some(function (v) { return isNaN(v); })) return NaN;
        return new Date(y, m, d, h, min, 0, 0).getTime();
      }

      function getScheduleItems() {
        var all = getAllActivitiesByDate();
        var nowMs = Date.now();
        var items = [];
        Object.keys(all).forEach(function (dateKey) {
          var dayItems = all[dateKey] || [];
          dayItems.forEach(function (act) {
            var startMs = toDateTimeMs(dateKey, act.start);
            var endMs = toDateTimeMs(dateKey, act.end || act.start || '00:00');
            if (isNaN(startMs)) return;
            var status = act.status || 'pending';
            items.push({
              id: act.id,
              dateKey: dateKey,
              start: act.start,
              end: act.end,
              name: act.name || 'Activity',
              color: act.color || '#38bdf8',
              priority: normalizePriority(act.priority),
              status: status,
              elapsedMs: getActivityElapsedMs(act, nowMs),
              startMs: startMs,
              endMs: endMs,
              isOverdue: startMs < nowMs && status !== 'done',
              score: Math.abs(startMs - nowMs)
            });
          });
        });
        items.sort(function (a, b) {
          if (a.status === 'done' && b.status !== 'done') return 1;
          if (b.status === 'done' && a.status !== 'done') return -1;
          if (a.isOverdue && !b.isOverdue) return -1;
          if (b.isOverdue && !a.isOverdue) return 1;
          if (allSchedulesSortMode === 'priority') {
            if (getPriorityRank(a.priority) !== getPriorityRank(b.priority)) {
              return getPriorityRank(a.priority) - getPriorityRank(b.priority);
            }
            return a.startMs - b.startMs;
          }
          if (allSchedulesSortMode === 'time') {
            if (a.startMs !== b.startMs) return a.startMs - b.startMs;
            return getPriorityRank(a.priority) - getPriorityRank(b.priority);
          }
          if (a.score !== b.score) return a.score - b.score;
          if (getPriorityRank(a.priority) !== getPriorityRank(b.priority)) {
            return getPriorityRank(a.priority) - getPriorityRank(b.priority);
          }
          return a.startMs - b.startMs;
        });
        return items;
      }

      function formatDateLabel(dateKey) {
        var parts = dateKey.split('-');
        if (parts.length !== 3) return dateKey;
        var d = new Date(parseInt(parts[0], 10), parseInt(parts[1], 10) - 1, parseInt(parts[2], 10));
        return d.toLocaleDateString(undefined, { weekday: 'long', month: 'long', day: 'numeric', year: 'numeric' });
      }

      function formatUpcomingWhen(dateKey, start) {
        var parts = dateKey.split('-');
        var d = new Date(parseInt(parts[0], 10), parseInt(parts[1], 10) - 1, parseInt(parts[2], 10));
        var today = new Date();
        today.setHours(0, 0, 0, 0);
        var day = new Date(d.getFullYear(), d.getMonth(), d.getDate());
        var diff = Math.round((day - today) / 86400000);
        var timeStr = formatTime24ToAmPm(start);
        if (diff === 0) return 'Today · ' + timeStr;
        if (diff === 1) return 'Tomorrow · ' + timeStr;
        if (diff === -1) return 'Yesterday · ' + timeStr;
        return d.toLocaleDateString(undefined, { weekday: 'short', month: 'short', day: 'numeric' }) + ' · ' + timeStr;
      }

      function setActivityStatus(dateKey, id, status) {
        if (!dateKey || !id) return false;
        var list = getActivities(dateKey);
        var idx = list.findIndex(function (a) { return a.id === id; });
        if (idx < 0) return false;
        var nowMs = Date.now();
        var act = list[idx];
        if (status === 'in_progress') {
          act.status = 'in_progress';
          if (!act.progressStartedAt) act.progressStartedAt = nowMs;
          if (typeof act.elapsedMs !== 'number' || isNaN(act.elapsedMs)) act.elapsedMs = 0;
        } else if (status === 'done') {
          act.elapsedMs = getActivityElapsedMs(act, nowMs);
          act.progressStartedAt = null;
          act.status = 'done';
          act.completedAt = nowMs;
          var bonusKey = getScheduleTaskKey(dateKey, id);
          if (mailCompletionBonusKey === bonusKey && !hasMailBonusClaimed(bonusKey)) {
            markMailBonusClaimed(bonusKey);
            addPoints(5, 'Completed from Bluely Mail');
          }
          mailCompletionBonusKey = null;
          showCompletionOverlay(act.name, act.elapsedMs);
        } else {
          act.elapsedMs = getActivityElapsedMs(act, nowMs);
          act.status = 'pending';
          act.progressStartedAt = null;
        }
        list[idx] = normalizeActivity(act);
        saveActivities(dateKey, list);
        return true;
      }

      function setActivityPriority(dateKey, id, priority) {
        if (!dateKey || !id) return false;
        var list = getActivities(dateKey);
        var idx = list.findIndex(function (a) { return a.id === id; });
        if (idx < 0) return false;
        list[idx].priority = normalizePriority(priority);
        saveActivities(dateKey, list);
        return true;
      }

      function shiftDateKey(dateKey, dayDelta) {
        var parts = dateKey ? dateKey.split('-') : [];
        if (parts.length !== 3) return dateKey;
        var y = parseInt(parts[0], 10);
        var m = parseInt(parts[1], 10) - 1;
        var d = parseInt(parts[2], 10);
        if ([y, m, d].some(function (v) { return isNaN(v); })) return dateKey;
        var dt = new Date(y, m, d);
        dt.setDate(dt.getDate() + dayDelta);
        var pad = function (n) { return (n < 10 ? '0' : '') + n; };
        return dt.getFullYear() + '-' + pad(dt.getMonth() + 1) + '-' + pad(dt.getDate());
      }

      function moveActivityToTomorrow(dateKey, id) {
        if (!dateKey || !id) return false;
        var source = getActivities(dateKey);
        var idx = source.findIndex(function (a) { return a.id === id; });
        if (idx < 0) return false;
        var act = normalizeActivity(source[idx]);
        source.splice(idx, 1);
        saveActivities(dateKey, source);
        var targetDate = shiftDateKey(dateKey, 1);
        var target = getActivities(targetDate);
        act.status = 'pending';
        act.progressStartedAt = null;
        act.id = generateActivityId();
        target.push(act);
        saveActivities(targetDate, target);
        return true;
      }

      function snoozeOverdueActivity(dateKey, id) {
        if (!dateKey || !id) return false;
        var list = getActivities(dateKey);
        var idx = list.findIndex(function (a) { return a.id === id; });
        if (idx < 0) return false;
        var act = normalizeActivity(list[idx]);
        var now = new Date();
        now.setSeconds(0, 0);
        now.setMinutes(now.getMinutes() + 30);
        var targetDate = now.getFullYear() + '-' +
          ((now.getMonth() + 1 < 10 ? '0' : '') + (now.getMonth() + 1)) + '-' +
          ((now.getDate() < 10 ? '0' : '') + now.getDate());
        var targetTime = (now.getHours() < 10 ? '0' : '') + now.getHours() + ':' +
          (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();

        if (targetDate === dateKey) {
          act.start = targetTime;
          act.status = 'pending';
          act.progressStartedAt = null;
          list[idx] = act;
          saveActivities(dateKey, list);
        } else {
          list.splice(idx, 1);
          saveActivities(dateKey, list);
          var targetList = getActivities(targetDate);
          act.start = targetTime;
          act.status = 'pending';
          act.progressStartedAt = null;
          act.id = generateActivityId();
          targetList.push(act);
          saveActivities(targetDate, targetList);
        }
        return true;
      }

      function deleteActivity(dateKey, id) {
        if (!dateKey || !id) return;
        var list = getActivities(dateKey);
        var next = list.filter(function (a) { return a.id !== id; });
        saveActivities(dateKey, next);
      }

      function wireScheduleItemActions(scopeEl, options) {
        options = options || {};
        scopeEl.querySelectorAll('.upcoming-status-btn').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var dateKey = btn.getAttribute('data-date');
            var id = btn.getAttribute('data-id');
            var status = btn.getAttribute('data-status');
            var card = btn.closest('.upcoming-item');
            if (!dateKey || !id || !status) return;
            if (status === 'in_progress' && options.allSchedules) {
              var list = getActivities(dateKey);
              var current = list.filter(function (a) { return a.id === id; })[0];
              if (current && current.status === 'in_progress') status = 'pending';
            }
            if (status === 'done' && options.autoHideDone && card) {
              card.classList.add('is-fading-out');
              setTimeout(function () {
                setActivityStatus(dateKey, id, status);
                renderUpcomingSchedules();
                renderAllSchedules();
                if (currentScheduleDate === dateKey) renderDayActivities();
                renderDailyQuests();
              }, 260);
            } else {
              if (!setActivityStatus(dateKey, id, status)) return;
              renderUpcomingSchedules();
              renderAllSchedules();
              if (currentScheduleDate === dateKey) renderDayActivities();
              renderDailyQuests();
            }
          });
        });
        scopeEl.querySelectorAll('.upcoming-delete-btn').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var dateKey = btn.getAttribute('data-date');
            var id = btn.getAttribute('data-id');
            if (!dateKey || !id) return;
            deleteActivity(dateKey, id);
            renderUpcomingSchedules();
            renderAllSchedules();
            if (currentScheduleDate === dateKey) renderDayActivities();
            renderDailyQuests();
          });
        });
        scopeEl.querySelectorAll('.schedule-priority-select').forEach(function (selectEl) {
          selectEl.addEventListener('change', function () {
            var dateKey = selectEl.getAttribute('data-date');
            var id = selectEl.getAttribute('data-id');
            if (!dateKey || !id) return;
            if (!setActivityPriority(dateKey, id, selectEl.value)) return;
            renderUpcomingSchedules();
            renderAllSchedules();
            if (currentScheduleDate === dateKey) renderDayActivities();
          });
        });
        scopeEl.querySelectorAll('.activity-priority-picker').forEach(function (picker) {
          var trigger = picker.querySelector('.activity-priority-picker-trigger');
          var menu = picker.querySelector('.activity-priority-picker-menu');
          if (!trigger || !menu) return;
          trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            var wasOpen = picker.classList.contains('is-open');
            closeAllSchedulesPickers();
            if (!wasOpen) openSchedulesPicker(picker, trigger, menu);
          });
          menu.addEventListener('click', function (e) {
            e.stopPropagation();
            var opt = e.target.closest('.all-schedules-picker-option');
            if (!opt) return;
            var value = opt.getAttribute('data-picker-value');
            var dateKey = picker.getAttribute('data-date');
            var id = picker.getAttribute('data-id');
            if (!value || !dateKey || !id) return;
            if (dateKey === 'form' && id === 'new') {
              var hiddenPriority = document.getElementById('activity-priority');
              if (hiddenPriority) hiddenPriority.value = value;
              var badge = picker.querySelector('.activity-priority-picker-value');
              if (badge) {
                var normalized = normalizePriority(value);
                badge.textContent = getPriorityLabel(normalized);
                badge.className = 'activity-priority-picker-value schedule-priority-badge priority-' + normalized;
              }
              menu.querySelectorAll('.all-schedules-picker-option').forEach(function (btn) {
                var selected = btn.getAttribute('data-picker-value') === value;
                btn.classList.toggle('is-selected', selected);
                btn.setAttribute('aria-selected', selected ? 'true' : 'false');
              });
              picker.classList.remove('is-open');
              if (trigger) trigger.setAttribute('aria-expanded', 'false');
              hidePickerMenu(menu);
              return;
            }
            if (!setActivityPriority(dateKey, id, value)) return;
            picker.classList.remove('is-open');
            if (trigger) trigger.setAttribute('aria-expanded', 'false');
            hidePickerMenu(menu);
            renderUpcomingSchedules();
            renderAllSchedules();
            if (currentScheduleDate === dateKey) renderDayActivities();
          });
        });
        scopeEl.querySelectorAll('.schedule-overdue-action').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var dateKey = btn.getAttribute('data-date');
            var id = btn.getAttribute('data-id');
            var action = btn.getAttribute('data-overdue-action');
            if (!dateKey || !id || !action) return;
            var changed = action === 'snooze'
              ? snoozeOverdueActivity(dateKey, id)
              : moveActivityToTomorrow(dateKey, id);
            if (!changed) return;
            renderUpcomingSchedules();
            renderAllSchedules();
            renderDayActivities();
            renderDailyQuests();
          });
        });
        scopeEl.querySelectorAll('.focus-mode-btn').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var dateKey = btn.getAttribute('data-date');
            var id = btn.getAttribute('data-id');
            if (!dateKey || !id) return;
            openFocusMode(dateKey, id);
          });
        });
      }

      function renderScheduleCards(listEl, items, options) {
        options = options || {};
        var nowMs = Date.now();
        var compact = !!options.compact;
        listEl.innerHTML = '';
        if (!items.length) {
          if (compact) {
            listEl.innerHTML =
              '<li class="upcoming-empty upcoming-empty--home">' +
                '<span class="upcoming-empty-icon" aria-hidden="true"></span>' +
                '<p class="upcoming-empty-title">Nothing on the horizon</p>' +
                '<p class="upcoming-empty-hint">Plan your day in Schedule and it will show up here.</p>' +
                '<button type="button" class="upcoming-empty-cta" id="upcoming-go-schedule">Open Schedule</button>' +
              '</li>';
            var goBtn = document.getElementById('upcoming-go-schedule');
            if (goBtn) {
              goBtn.addEventListener('click', function () {
                playPageTransition(function () {
                  setActivePanel('schedule');
                  ensureScheduleDaySelected();
                });
              });
            }
          } else {
            listEl.innerHTML = '<li class="upcoming-empty">No schedules found.</li>';
          }
          return;
        }
        var countsByDate = {};
        if (options.groupByDate) {
          items.forEach(function (it) {
            if (options.hideDone && it.status === 'done') return;
            if (options.dateFilter && options.dateFilter !== 'all' && it.dateKey !== options.dateFilter) return;
            countsByDate[it.dateKey] = (countsByDate[it.dateKey] || 0) + 1;
          });
        }
        var currentDateSection = null;
        items.forEach(function (act) {
          if (options.hideDone && act.status === 'done') return;
          if (options.dateFilter && options.dateFilter !== 'all' && act.dateKey !== options.dateFilter) return;
          if (options.groupByDate && currentDateSection !== act.dateKey) {
            currentDateSection = act.dateKey;
            var headerLi = document.createElement('li');
            headerLi.className = 'all-schedules-date-header';
            if (options.allSchedules) {
              headerLi.innerHTML =
                '<div class="all-schedules-date-head">' +
                  '<div class="all-schedules-date-head-text">' +
                    '<span class="all-schedules-date-label">' + formatDateLabel(act.dateKey) + '</span>' +
                    '<span class="all-schedules-date-count">' + (countsByDate[act.dateKey] || 0) + ' ' +
                      ((countsByDate[act.dateKey] || 0) === 1 ? 'activity' : 'activities') + '</span>' +
                  '</div>' +
                  '<button type="button" class="all-schedules-open-day" data-date="' + act.dateKey + '">Open day</button>' +
                '</div>';
            } else {
              headerLi.textContent = formatDateLabel(act.dateKey);
            }
            listEl.appendChild(headerLi);
          }
          var parts = act.dateKey.split('-');
          var d = new Date(parseInt(parts[0], 10), parseInt(parts[1], 10) - 1, parseInt(parts[2], 10));
          var li = document.createElement('li');
          var isNow = act.startMs < nowMs && (!isNaN(act.endMs) && act.endMs >= nowMs);
          if (compact) {
            li.className = 'upcoming-item upcoming-item--preview status-' + (act.status || 'pending') +
              (act.isOverdue ? ' upcoming-item--overdue' : '') +
              (isNow ? ' upcoming-item--now' : '');
            li.innerHTML =
              '<div class="upcoming-item-accent" style="background:' + act.color + '"></div>' +
              '<div class="upcoming-item-body">' +
                '<div class="upcoming-item-top">' +
                  '<span class="upcoming-item-name">' + act.name + '</span>' +
                  '<span class="schedule-priority-badge priority-' + act.priority + '">' + getPriorityLabel(act.priority) + '</span>' +
                '</div>' +
                '<div class="upcoming-item-meta">' +
                  '<span class="upcoming-when-chip' + (isNow ? ' upcoming-when-chip--now' : '') + (act.isOverdue ? ' upcoming-when-chip--late' : '') + '">' +
                    (isNow ? '<span class="upcoming-now-dot" aria-hidden="true"></span>' : '') +
                    formatUpcomingWhen(act.dateKey, act.start) +
                  '</span>' +
                  (act.isOverdue ? '<span class="upcoming-late-tag">Overdue</span>' : '') +
                  (act.status === 'in_progress'
                    ? '<span class="upcoming-timer">⏱ ' + formatDuration(act.elapsedMs) + '</span>'
                    : '') +
                '</div>' +
              '</div>';
          } else if (options.allSchedules) {
            li.className = 'upcoming-item upcoming-item--full status-' + (act.status || 'pending') +
              (act.isOverdue ? ' upcoming-item--overdue' : '') +
              (isNow ? ' upcoming-item--now' : '');
            li.innerHTML =
              '<div class="upcoming-item-accent" style="background:' + act.color + '"></div>' +
              '<div class="upcoming-item-body">' +
                '<div class="upcoming-item-top">' +
                  '<span class="upcoming-item-name">' + act.name + '</span>' +
                  '<span class="schedule-priority-badge priority-' + act.priority + '">' + getPriorityLabel(act.priority) + '</span>' +
                '</div>' +
                '<div class="upcoming-item-meta upcoming-item-meta--full">' +
                  '<span class="upcoming-when-chip' + (isNow ? ' upcoming-when-chip--now' : '') + (act.isOverdue ? ' upcoming-when-chip--late' : '') + '">' +
                    (isNow ? '<span class="upcoming-now-dot" aria-hidden="true"></span>' : '') +
                    formatUpcomingWhen(act.dateKey, act.start) +
                    (act.end ? ' – ' + formatTime24ToAmPm(act.end) : '') +
                  '</span>' +
                  (act.isOverdue ? '<span class="upcoming-late-tag">Overdue</span>' : '') +
                  (act.status === 'in_progress'
                    ? '<span class="upcoming-timer">⏱ ' + formatDuration(act.elapsedMs) + '</span>'
                    : (act.status === 'done'
                      ? '<span class="upcoming-timer done-time">Done · ' + formatDuration(act.elapsedMs) + '</span>'
                      : '')) +
                  '<span class="upcoming-priority-edit">Priority ' + buildPriorityPickerHtml(act.dateKey, act.id, act.priority) + '</span>' +
                '</div>' +
                '<div class="upcoming-item-actions upcoming-item-actions--full">' +
                  '<div class="upcoming-action-group upcoming-action-group--primary">' +
                    '<button type="button" class="upcoming-action-btn upcoming-action-btn--progress upcoming-status-btn all-schedules-progress-btn' + (act.status === 'in_progress' ? ' is-active' : '') + '" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-status="in_progress" aria-pressed="' + (act.status === 'in_progress' ? 'true' : 'false') + '">In progress</button>' +
                    '<button type="button" class="upcoming-action-btn upcoming-action-btn--done upcoming-status-btn' + (act.status === 'done' ? ' is-active' : '') + '" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-status="done">Done</button>' +
                    (act.status !== 'done' ? '<button type="button" class="upcoming-action-btn upcoming-action-btn--focus upcoming-status-btn focus-mode-btn" data-date="' + act.dateKey + '" data-id="' + act.id + '">Focus</button>' : '') +
                  '</div>' +
                  ((act.isOverdue || options.showDelete)
                    ? '<div class="upcoming-action-group upcoming-action-group--tail' + (act.isOverdue ? ' upcoming-action-group--has-overdue' : '') + '">' +
                        (act.isOverdue
                          ? '<button type="button" class="upcoming-action-btn upcoming-action-btn--snooze upcoming-status-btn schedule-overdue-action" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-overdue-action="snooze">Snooze</button>' +
                            '<button type="button" class="upcoming-action-btn upcoming-action-btn--tomorrow upcoming-status-btn schedule-overdue-action" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-overdue-action="tomorrow">Tomorrow</button>'
                          : '') +
                        (options.showDelete
                          ? '<button type="button" class="upcoming-action-btn upcoming-action-btn--delete upcoming-delete-btn" data-date="' + act.dateKey + '" data-id="' + act.id + '">Delete</button>'
                          : '') +
                      '</div>'
                    : '') +
                '</div>' +
              '</div>';
          } else {
            li.className = 'upcoming-item status-' + (act.status || 'pending');
            li.innerHTML =
              '<span class="upcoming-item-color" style="background:' + act.color + '"></span>' +
              '<span class="upcoming-item-main">' +
                '<span class="upcoming-item-name">' + act.name + ' <span class="schedule-priority-badge priority-' + act.priority + '">' + getPriorityLabel(act.priority) + '</span>' +
                  (act.isOverdue ? ' <span class="upcoming-overdue-warning">Not Completed! Due past schedule time!</span>' : '') +
                '</span>' +
                '<span class="upcoming-item-time">' +
                  (isNow ? 'Now · ' : '') +
                  (act.isOverdue ? 'Overdue · ' : '') +
                  d.toLocaleDateString(undefined, { month: 'short', day: 'numeric' }) +
                  ' · ' + formatTime24ToAmPm(act.start) +
                  (act.end ? ' - ' + formatTime24ToAmPm(act.end) : '') +
                '</span>' +
                '<span class="upcoming-priority-edit">Priority: ' + buildPrioritySelectHtml(act.dateKey, act.id, act.priority, 'schedule-priority-select inline-priority-select') + '</span>' +
                (act.status === 'in_progress'
                  ? '<span class="upcoming-timer">Timer: ' + formatDuration(act.elapsedMs) + '</span>'
                  : (act.status === 'done'
                    ? '<span class="upcoming-timer done-time">Completed in: ' + formatDuration(act.elapsedMs) + '</span>'
                    : '')) +
              '</span>' +
              '<span class="upcoming-item-actions">' +
                '<button type="button" class="upcoming-status-btn' + (act.status === 'in_progress' ? ' is-active' : '') + '" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-status="in_progress">In progress</button>' +
                '<button type="button" class="upcoming-status-btn' + (act.status === 'done' ? ' is-active' : '') + '" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-status="done">Done</button>' +
                (act.status !== 'done' ? '<button type="button" class="upcoming-status-btn focus-mode-btn" data-date="' + act.dateKey + '" data-id="' + act.id + '">Focus</button>' : '') +
                (act.isOverdue ? '<button type="button" class="upcoming-status-btn schedule-overdue-action" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-overdue-action="snooze">Snooze</button>' : '') +
                (act.isOverdue ? '<button type="button" class="upcoming-status-btn schedule-overdue-action" data-date="' + act.dateKey + '" data-id="' + act.id + '" data-overdue-action="tomorrow">Move tomorrow</button>' : '') +
                (options.showDelete ? '<button type="button" class="upcoming-delete-btn" data-date="' + act.dateKey + '" data-id="' + act.id + '">Delete</button>' : '') +
              '</span>';
          }
          listEl.appendChild(li);
        });
        if (!listEl.children.length) {
          if (options.allSchedules) {
            listEl.innerHTML =
              '<li class="upcoming-empty upcoming-empty--all">' +
                '<p class="upcoming-empty-title">No matching activities</p>' +
                '<p class="upcoming-empty-hint">Try another filter or add plans in Schedule.</p>' +
              '</li>';
          } else {
            listEl.innerHTML = '<li class="upcoming-empty">No schedules found.</li>';
          }
          return;
        }
        if (!compact) {
          wireScheduleItemActions(listEl, options);
        }
        if (options.allSchedules) {
          wireAllSchedulesExtras(listEl);
        }
      }

      function filterAllScheduleItems(items) {
        var q = (allSchedulesSearchQuery || '').trim().toLowerCase();
        return items.filter(function (it) {
          if (allSchedulesDateFilter !== 'all' && it.dateKey !== allSchedulesDateFilter) return false;
          if (allSchedulesStatusFilter === 'all' && it.status === 'done') return false;
          if (allSchedulesStatusFilter === 'active' && it.status === 'done') return false;
          if (allSchedulesStatusFilter === 'done' && it.status !== 'done') return false;
          if (allSchedulesStatusFilter === 'overdue' && !it.isOverdue) return false;
          if (allSchedulesStatusFilter === 'in_progress' && it.status !== 'in_progress') return false;
          if (allSchedulesStatusFilter === 'pending' && it.status !== 'pending') return false;
          if (q && String(it.name || '').toLowerCase().indexOf(q) === -1) return false;
          return true;
        });
      }

      var ALL_SCHEDULES_SORT_OPTIONS = [
        { value: 'smart', label: 'Smart sort' },
        { value: 'priority', label: 'Priority first' },
        { value: 'time', label: 'Time first' }
      ];

      function getAllSchedulesSortLabel(mode) {
        var found = ALL_SCHEDULES_SORT_OPTIONS.filter(function (opt) { return opt.value === mode; })[0];
        return found ? found.label : 'Smart sort';
      }

      function showPickerMenu(menu) {
        if (!menu) return;
        menu.hidden = false;
        menu.classList.remove('is-menu-closing');
        requestAnimationFrame(function () {
          requestAnimationFrame(function () {
            menu.classList.add('is-menu-visible');
          });
        });
      }

      function hidePickerMenu(menu, onDone) {
        if (!menu || menu.hidden) {
          if (onDone) onDone();
          return;
        }
        menu.classList.remove('is-menu-visible');
        menu.classList.add('is-menu-closing');
        window.setTimeout(function () {
          menu.classList.remove('is-menu-closing');
          menu.hidden = true;
          if (onDone) onDone();
        }, PICKER_MENU_TRANSITION_MS);
      }

      function openSchedulesPicker(picker, trigger, menu) {
        if (!picker || !menu) return;
        closeAllSchedulesPickers();
        picker.classList.add('is-open');
        if (trigger) trigger.setAttribute('aria-expanded', 'true');
        showPickerMenu(menu);
      }

      function closeSchedulesPicker(picker, trigger, menu) {
        if (!picker) return;
        picker.classList.remove('is-open');
        if (trigger) trigger.setAttribute('aria-expanded', 'false');
        hidePickerMenu(menu);
      }

      function closeAllSchedulesPickers() {
        document.querySelectorAll('.all-schedules-picker.is-open').forEach(function (picker) {
          closeSchedulesPicker(
            picker,
            picker.querySelector('.all-schedules-picker-trigger'),
            picker.querySelector('.all-schedules-picker-menu')
          );
        });
        document.querySelectorAll('#schedule-panel .schedule-nav-picker.is-open').forEach(function (picker) {
          closeSchedulesPicker(
            picker,
            picker.querySelector('.all-schedules-picker-trigger'),
            picker.querySelector('.all-schedules-picker-menu')
          );
        });
        document.querySelectorAll('.activity-priority-picker.is-open').forEach(function (picker) {
          picker.classList.remove('is-open');
          var trigger = picker.querySelector('.activity-priority-picker-trigger');
          var menu = picker.querySelector('.activity-priority-picker-menu');
          if (trigger) trigger.setAttribute('aria-expanded', 'false');
          hidePickerMenu(menu);
        });
      }

      function getAllSchedulesViewKey() {
        return [
          allSchedulesStatusFilter,
          allSchedulesDateFilter,
          allSchedulesSortMode,
          (allSchedulesSearchQuery || '').trim().toLowerCase()
        ].join('\x1e');
      }

      function animateAllSchedulesListChange(paint) {
        var listWrap = document.querySelector('#all-schedules-panel .all-schedules-list-wrap');
        if (!listWrap) {
          paint();
          return;
        }
        listWrap.classList.add('is-view-exit');
        window.setTimeout(function () {
          paint();
          listWrap.classList.remove('is-view-exit');
          listWrap.classList.add('is-view-enter');
          requestAnimationFrame(function () {
            window.setTimeout(function () {
              listWrap.classList.remove('is-view-enter');
            }, ALL_SCHEDULES_LIST_TRANSITION_MS);
          });
        }, ALL_SCHEDULES_LIST_TRANSITION_MS);
      }

      function syncAllSchedulesPickers() {
        var dateValueEl = document.getElementById('all-schedules-date-value');
        var dateMenu = document.getElementById('all-schedules-date-menu');
        var dateLabel = allSchedulesDateFilter === 'all'
          ? 'All days'
          : formatDateLabel(allSchedulesDateFilter);
        if (dateValueEl) dateValueEl.textContent = dateLabel;
        if (dateMenu) {
          dateMenu.querySelectorAll('.all-schedules-picker-option').forEach(function (opt) {
            var selected = opt.getAttribute('data-picker-value') === allSchedulesDateFilter;
            opt.classList.toggle('is-selected', selected);
            opt.setAttribute('aria-selected', selected ? 'true' : 'false');
          });
        }
        var sortValueEl = document.getElementById('all-schedules-sort-value');
        if (sortValueEl) sortValueEl.textContent = getAllSchedulesSortLabel(allSchedulesSortMode);
        var sortMenu = document.getElementById('all-schedules-sort-menu');
        if (sortMenu) {
          sortMenu.querySelectorAll('.all-schedules-picker-option').forEach(function (opt) {
            var selected = opt.getAttribute('data-picker-value') === allSchedulesSortMode;
            opt.classList.toggle('is-selected', selected);
            opt.setAttribute('aria-selected', selected ? 'true' : 'false');
          });
        }
      }

      function updateAllSchedulesStats(allItems, filteredItems) {
        var statsEl = document.getElementById('all-schedules-stats');
        var leadEl = document.getElementById('all-schedules-lead');
        if (!statsEl) return;
        var pending = 0;
        var overdue = 0;
        var done = 0;
        allItems.forEach(function (it) {
          if (it.status === 'done') done += 1;
          else pending += 1;
          if (it.isOverdue) overdue += 1;
        });
        statsEl.innerHTML =
          '<div class="all-schedules-stat"><span class="all-schedules-stat-value">' + pending + '</span><span class="all-schedules-stat-label">Active</span></div>' +
          '<div class="all-schedules-stat' + (overdue ? ' all-schedules-stat--warn' : '') + '"><span class="all-schedules-stat-value">' + overdue + '</span><span class="all-schedules-stat-label">Overdue</span></div>' +
          '<div class="all-schedules-stat"><span class="all-schedules-stat-value">' + done + '</span><span class="all-schedules-stat-label">Done</span></div>';
        if (leadEl) {
          var showing = filteredItems.length;
          leadEl.textContent = showing === allItems.length
            ? 'Manage every activity across your calendar.'
            : 'Showing ' + showing + ' of ' + allItems.length + ' activities.';
        }
      }

      function syncAllSchedulesFilterChips() {
        document.querySelectorAll('.all-schedules-chip').forEach(function (chip) {
          var val = chip.getAttribute('data-status-filter');
          chip.classList.toggle('is-active', val === allSchedulesStatusFilter);
        });
        syncAllSchedulesPickers();
      }

      function wireAllSchedulesExtras(scopeEl) {
        scopeEl.querySelectorAll('.all-schedules-open-day').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var dateKey = btn.getAttribute('data-date');
            if (!dateKey) return;
            playPageTransition(function () {
              setActivePanel('schedule');
              openDayPanel(dateKey);
              ensureScheduleDaySelected();
            });
          });
        });
      }

      function renderUpcomingSchedules() {
        var listEl = document.getElementById('upcoming-list');
        var listWrap = document.getElementById('upcoming-list-wrap');
        var viewAllBtn = document.getElementById('upcoming-view-all-btn');
        var countEl = document.getElementById('upcoming-count');
        var subtitleEl = document.getElementById('upcoming-subtitle');
        var panelEl = document.getElementById('upcoming-panel');
        if (!listEl) return;
        var items = getScheduleItems();
        var pending = items.filter(function (it) { return it.status !== 'done'; });
        renderScheduleCards(listEl, pending, { hideDone: true, compact: true });
        if (listWrap) {
          listWrap.classList.toggle('upcoming-list-wrap--scroll', pending.length > 1);
        }
        if (countEl) {
          countEl.textContent = String(pending.length);
          countEl.hidden = pending.length === 0;
        }
        if (subtitleEl) {
          if (!pending.length) {
            subtitleEl.textContent = 'Add activities in Schedule to see them here';
          } else if (pending.length === 1) {
            subtitleEl.textContent = '1 thing on your radar';
          } else {
            subtitleEl.textContent = pending.length + ' coming up · scroll the list';
          }
        }
        if (panelEl) {
          panelEl.classList.toggle('upcoming-panel--has-items', pending.length > 0);
          panelEl.classList.toggle('upcoming-panel--empty', pending.length === 0);
        }
        if (viewAllBtn) {
          viewAllBtn.hidden = pending.length === 0;
          var label = viewAllBtn.querySelector('.upcoming-view-all-label');
          if (label) {
            label.textContent = pending.length > 0
              ? 'View all schedules (' + pending.length + ')'
              : 'View all schedules';
          }
        }
        renderDailyQuests();
      }

      function populateAllSchedulesDatePicker(items) {
        var menu = document.getElementById('all-schedules-date-menu');
        if (!menu) return;
        var existing = allSchedulesDateFilter;
        var dates = [];
        items.forEach(function (it) {
          if (dates.indexOf(it.dateKey) === -1) dates.push(it.dateKey);
        });
        dates.sort();
        if (existing !== 'all' && dates.indexOf(existing) === -1) {
          allSchedulesDateFilter = 'all';
        }
        var html = '<button type="button" class="all-schedules-picker-option' +
          (allSchedulesDateFilter === 'all' ? ' is-selected' : '') +
          '" role="option" aria-selected="' + (allSchedulesDateFilter === 'all' ? 'true' : 'false') +
          '" data-picker-value="all">' +
          '<span class="all-schedules-picker-option-label">All days</span>' +
          '<span class="all-schedules-picker-option-hint">Every scheduled day</span>' +
          '</button>';
        dates.forEach(function (dateKey) {
          var selected = allSchedulesDateFilter === dateKey;
          html += '<button type="button" class="all-schedules-picker-option' +
            (selected ? ' is-selected' : '') +
            '" role="option" aria-selected="' + (selected ? 'true' : 'false') +
            '" data-picker-value="' + dateKey + '">' +
            '<span class="all-schedules-picker-option-label">' + formatDateLabel(dateKey) + '</span>' +
            '</button>';
        });
        menu.innerHTML = html;
        var optionCount = 1 + dates.length;
        menu.classList.toggle('picker-menu--scroll-3', optionCount > 3);
      }

      function renderAllSchedules() {
        var listEl = document.getElementById('all-schedules-list');
        if (!listEl) return;
        var viewKey = getAllSchedulesViewKey();
        var viewChanged = lastAllSchedulesViewKey !== null && lastAllSchedulesViewKey !== viewKey;

        function paintAllSchedulesList() {
          lastAllSchedulesViewKey = viewKey;
          var items = getScheduleItems();
          populateAllSchedulesDatePicker(items);
          var filtered = filterAllScheduleItems(items);
          updateAllSchedulesStats(items, filtered);
          syncAllSchedulesFilterChips();
          renderScheduleCards(listEl, filtered, {
            groupByDate: allSchedulesDateFilter === 'all',
            dateFilter: 'all',
            showDelete: true,
            hideDone: false,
            autoHideDone: true,
            allSchedules: true
          });
        }

        if (viewChanged) {
          animateAllSchedulesListChange(paintAllSchedulesList);
          return;
        }
        paintAllSchedulesList();
      }

      function getDailyQuestState() {
        var todayKey = getLocalDateKey(0);
        try {
          var raw = localStorage.getItem(QUESTS_STORAGE_KEY);
          var all = raw ? JSON.parse(raw) : {};
          var state = all[todayKey] && typeof all[todayKey] === 'object' ? all[todayKey] : {};
          state.completeThreeClaimed = !!state.completeThreeClaimed;
          state.noOverdueClaimed = !!state.noOverdueClaimed;
          state.completeThreeShardClaimed = !!state.completeThreeShardClaimed;
          state.noOverdueShardClaimed = !!state.noOverdueShardClaimed;
          return state;
        } catch (e) {
          return { completeThreeClaimed: false, noOverdueClaimed: false, completeThreeShardClaimed: false, noOverdueShardClaimed: false };
        }
      }

      function saveDailyQuestState(state) {
        var todayKey = getLocalDateKey(0);
        try {
          var raw = localStorage.getItem(QUESTS_STORAGE_KEY);
          var all = raw ? JSON.parse(raw) : {};
          all[todayKey] = {
            completeThreeClaimed: !!state.completeThreeClaimed,
            noOverdueClaimed: !!state.noOverdueClaimed,
            completeThreeShardClaimed: !!state.completeThreeShardClaimed,
            noOverdueShardClaimed: !!state.noOverdueShardClaimed
          };
          localStorage.setItem(QUESTS_STORAGE_KEY, JSON.stringify(all));
        } catch (e) {}
      }

      function getDailyQuestProgress() {
        var all = getAllActivitiesByDate();
        var todayKey = getLocalDateKey(0);
        var doneToday = 0;
        var totalToday = 0;
        var overdueToday = false;
        Object.keys(all).forEach(function (dateKey) {
          var list = all[dateKey] || [];
          list.forEach(function (act) {
            if (dateKey !== todayKey) return;
            totalToday += 1;
            if (act.status === 'done') doneToday += 1;
          });
        });
        var scheduleItems = getScheduleItems();
        overdueToday = scheduleItems.some(function (item) {
          return item.dateKey === todayKey && item.isOverdue;
        });
        return {
          doneToday: doneToday,
          completeThreeDone: doneToday >= 3,
          noOverdueDone: totalToday > 0 && !overdueToday
        };
      }

      function applyQuestRewards(progress, state) {
        var changed = false;
        if (progress.completeThreeDone && !state.completeThreeClaimed) {
          addPoints(QUEST_COMPLETE_THREE_REWARD, 'Daily quest: 3 tasks done');
          state.completeThreeClaimed = true;
          changed = true;
        }
        if (progress.completeThreeDone && !state.completeThreeShardClaimed) {
          addShards(QUEST_COMPLETE_THREE_SHARD_REWARD, 'Daily quest: 3 tasks done');
          state.completeThreeShardClaimed = true;
          changed = true;
        }
        if (progress.noOverdueDone && !state.noOverdueClaimed) {
          addPoints(QUEST_NO_OVERDUE_REWARD, 'Daily quest: no overdue tasks');
          state.noOverdueClaimed = true;
          changed = true;
        }
        if (progress.noOverdueDone && !state.noOverdueShardClaimed) {
          addShards(QUEST_NO_OVERDUE_SHARD_REWARD, 'Daily quest: no overdue tasks');
          state.noOverdueShardClaimed = true;
          changed = true;
        }
        if (changed) saveDailyQuestState(state);
        return changed;
      }

      function renderDailyQuests() {
        var questsEl = document.getElementById('daily-quests-list');
        if (!questsEl) return;
        var progress = getDailyQuestProgress();
        var state = getDailyQuestState();
        var changed = applyQuestRewards(progress, state);
        if (changed) {
          state = getDailyQuestState();
        }
        questsEl.innerHTML = '';
        var completeThreeLine = document.createElement('li');
        completeThreeLine.className = 'daily-quests-item' + (state.completeThreeClaimed ? ' is-complete' : '');
        completeThreeLine.innerHTML =
          '<span>Complete 3 tasks (' + progress.doneToday + '/3)</span>' +
          '<span class="daily-quests-points">+' + QUEST_COMPLETE_THREE_REWARD + ' pts, +' + QUEST_COMPLETE_THREE_SHARD_REWARD + ' shard</span>';
        questsEl.appendChild(completeThreeLine);
        var noOverdueLine = document.createElement('li');
        noOverdueLine.className = 'daily-quests-item' + (state.noOverdueClaimed ? ' is-complete' : '');
        noOverdueLine.innerHTML =
          '<span>No overdue tasks today</span>' +
          '<span class="daily-quests-points">+' + QUEST_NO_OVERDUE_REWARD + ' pts, +' + QUEST_NO_OVERDUE_SHARD_REWARD + ' shard</span>';
        questsEl.appendChild(noOverdueLine);
      }

      function getActivityById(dateKey, id) {
        var list = getActivities(dateKey);
        var idx = list.findIndex(function (a) { return a.id === id; });
        if (idx < 0) return null;
        return normalizeActivity(list[idx]);
      }

      function updateFocusView() {
        if (!focusContext || !focusModeOverlay) return;
        if (focusContext.mode === 'free') {
          var now = Date.now();
          if (freeFocusModeType === 'timer') {
            focusModeKicker.textContent = 'Focus Timer';
            focusModeTitle.textContent = 'Timer Session';
            if (freeTimerEndsAt) {
              freeTimerRemainingMs = Math.max(0, freeTimerEndsAt - now);
              if (freeTimerRemainingMs <= 0) {
                freeTimerEndsAt = null;
              }
            }
            focusModeTime.textContent = formatDuration(freeTimerRemainingMs);
            if (freeTimerDurationMs > 0 && focusModeRing) {
              var timerProgress = Math.max(0, Math.min(1, (freeTimerDurationMs - freeTimerRemainingMs) / freeTimerDurationMs));
              focusModeRing.style.setProperty('--focus-progress', String(timerProgress));
            }
            focusModeToggleBtn.textContent = freeTimerEndsAt ? 'Pause' : (freeTimerRemainingMs > 0 ? 'Resume' : 'Start');
            if (focusModeBackStopwatchBtn) focusModeBackStopwatchBtn.hidden = false;
          } else {
            focusModeKicker.textContent = 'Focus Stopwatch';
            focusModeTitle.textContent = 'Focus Session';
            var elapsed = freeFocusElapsedMs + (freeFocusStartedAt ? Math.max(0, now - freeFocusStartedAt) : 0);
            focusModeTime.textContent = formatDuration(elapsed);
            focusModeToggleBtn.textContent = freeFocusStartedAt ? 'Pause' : 'Resume';
            if (focusModeRing) {
              var cycleProgress = (elapsed % 60000) / 60000;
              focusModeRing.style.setProperty('--focus-progress', String(cycleProgress));
            }
            if (focusModeBackStopwatchBtn) focusModeBackStopwatchBtn.hidden = true;
          }
          return;
        }
        var act = getActivityById(focusContext.dateKey, focusContext.id);
        if (!act) {
          closeFocusMode();
          return;
        }
        focusModeTitle.textContent = act.name || 'Activity';
        focusModeTime.textContent = formatDuration(getActivityElapsedMs(act, Date.now()));
        if (focusModeKicker) focusModeKicker.textContent = 'Focus Mode';
        if (focusModeBackStopwatchBtn) focusModeBackStopwatchBtn.hidden = true;
        if (focusModeRing) {
          var activityElapsed = getActivityElapsedMs(act, Date.now());
          focusModeRing.style.setProperty('--focus-progress', String((activityElapsed % 60000) / 60000));
        }
        var isPaused = act.status !== 'in_progress';
        focusModeToggleBtn.textContent = isPaused ? 'Resume' : 'Pause';
      }

      function closeFocusMode() {
        if (focusTimerId) {
          clearInterval(focusTimerId);
          focusTimerId = null;
        }
        if (focusContext && focusContext.mode === 'free' && freeFocusStartedAt) {
          freeFocusElapsedMs += Math.max(0, Date.now() - freeFocusStartedAt);
          freeFocusStartedAt = null;
        }
        if (focusContext && focusContext.mode === 'free' && freeFocusModeType === 'timer' && freeTimerEndsAt) {
          freeTimerRemainingMs = Math.max(0, freeTimerEndsAt - Date.now());
          freeTimerEndsAt = null;
        }
        focusContext = null;
        document.body.classList.remove('focus-mode-active');
        var focusSidebarBtn = document.getElementById('sidebar-focus-btn');
        if (focusSidebarBtn) focusSidebarBtn.classList.remove('is-active');
        if (!focusModeOverlay) return;
        focusModeOverlay.classList.remove('is-open');
        focusModeOverlay.setAttribute('aria-hidden', 'true');
      }

      function openFocusMode(dateKey, id) {
        if (!focusModeOverlay || !focusModeTitle || !focusModeTime) return;
        var act = getActivityById(dateKey, id);
        if (!act) return;
        focusContext = { dateKey: dateKey, id: id };
        if (act.status !== 'done') setActivityStatus(dateKey, id, 'in_progress');
        document.body.classList.add('focus-mode-active');
        var focusSidebarBtn = document.getElementById('sidebar-focus-btn');
        if (focusSidebarBtn) focusSidebarBtn.classList.add('is-active');
        focusModeOverlay.classList.add('is-open');
        focusModeOverlay.setAttribute('aria-hidden', 'false');
        updateFocusView();
        if (focusTimerId) clearInterval(focusTimerId);
        focusTimerId = setInterval(updateFocusView, 1000);
        renderUpcomingSchedules();
        renderAllSchedules();
        if (currentScheduleDate === dateKey) renderDayActivities();
      }

      function openFreeFocusMode() {
        if (!focusModeOverlay || !focusModeTitle || !focusModeTime) return;
        focusContext = { mode: 'free' };
        freeFocusElapsedMs = 0;
        freeFocusStartedAt = Date.now();
        freeFocusModeType = 'stopwatch';
        freeTimerDurationMs = 0;
        freeTimerRemainingMs = 0;
        freeTimerEndsAt = null;
        document.body.classList.add('focus-mode-active');
        var focusSidebarBtn = document.getElementById('sidebar-focus-btn');
        if (focusSidebarBtn) focusSidebarBtn.classList.add('is-active');
        focusModeOverlay.classList.add('is-open');
        focusModeOverlay.setAttribute('aria-hidden', 'false');
        updateFocusView();
        if (focusTimerId) clearInterval(focusTimerId);
        focusTimerId = setInterval(updateFocusView, 1000);
      }

      function hasInProgressSchedules() {
        var items = getScheduleItems();
        return items.some(function (it) { return it.status === 'in_progress'; });
      }

      var addBtn = document.getElementById('add-link-btn');
      var makeFolderBtn = document.getElementById('make-folder-btn');
      var editAppsBtn = document.getElementById('edit-apps-btn');
      var panel = document.getElementById('add-link-panel');
      var form = document.getElementById('add-link-form');
      var urlInput = document.getElementById('link-url-input');
      var nameInput = document.getElementById('link-name-input');
      var cancelBtn = document.getElementById('add-link-cancel');

      function openAddPanel() {
        panel.classList.add('is-open');
        urlInput.value = '';
        nameInput.value = '';
        setTimeout(function () {
          urlInput.focus();
        }, 10);
      }

      function closeAddPanel() {
        panel.classList.remove('is-open');
      }

      addBtn.addEventListener('click', function () {
        setEditMode(false);
        openAddPanel();
      });
      if (makeFolderBtn) {
        makeFolderBtn.addEventListener('click', function () {
          var links = getLinks();
          var folderName = 'Folder ' + (getFolderCount(links) + 1);
          links.push({
            id: generateLibraryItemId(),
            type: 'folder',
            name: folderName,
            folderId: null
          });
          saveLinks(links);
          goToLauncherPageForRootIndex(links.filter(function (item) { return !item.folderId; }).length - 1);
          closeAddPanel();
          renderLinks();
        });
      }
      if (editAppsBtn) {
        editAppsBtn.addEventListener('click', function () {
          closeAddPanel();
          setEditMode(!appEditMode);
        });
      }

      cancelBtn.addEventListener('click', function () {
        closeAddPanel();
      });

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        var url = urlInput.value.trim();
        if (!url) {
          urlInput.focus();
          return;
        }
        if (url.indexOf('http') !== 0) url = 'https://' + url;
        try {
          new URL(url);
        } catch (e) {
          alert('Please enter a valid URL.');
          urlInput.focus();
          return;
        }
        var name = nameInput.value.trim();
        var links = getLinks();
        links.push({
          id: generateLibraryItemId(),
          type: 'link',
          url: url,
          folderId: null,
          name: name ? name : getDomain(url)
        });
        saveLinks(links);
        goToLauncherPageForRootIndex(links.filter(function (item) { return !item.folderId; }).length - 1);
        renderLinks();
        closeAddPanel();
      });

      var appEditOverlay = document.getElementById('app-edit-overlay');
      var appEditRenameBtn = document.getElementById('app-edit-rename-btn');
      var appEditDeleteBtn = document.getElementById('app-edit-delete-btn');
      var appEditCancelBtn = document.getElementById('app-edit-cancel-btn');
      var appEditSaveRenameBtn = document.getElementById('app-edit-save-rename-btn');
      var appEditRenameRow = document.getElementById('app-edit-rename-row');
      var appEditRenameInput = document.getElementById('app-edit-rename-input');

      if (appEditRenameBtn && appEditRenameRow && appEditRenameInput) {
        appEditRenameBtn.addEventListener('click', function () {
          if (!appEditTargetId) return;
          var t = getItemById(appEditTargetId);
          if (t && isProtectedAppLink(t)) return;
          appEditRenameRow.hidden = false;
          setTimeout(function () { appEditRenameInput.focus(); appEditRenameInput.select(); }, 0);
        });
      }
      if (appEditSaveRenameBtn) {
        appEditSaveRenameBtn.addEventListener('click', function () {
          if (!appEditTargetId) return;
          var t = getItemById(appEditTargetId);
          if (t && isProtectedAppLink(t)) return;
          var nextName = (appEditRenameInput && appEditRenameInput.value ? appEditRenameInput.value : '').trim();
          if (!nextName) return;
          var links = getLinks();
          links = links.map(function (item) {
            if (item.id !== appEditTargetId) return item;
            item.name = nextName;
            return item;
          });
          saveLinks(links);
          renderLinks();
          if (currentFolderViewId) renderFolderViewOverlay(currentFolderViewId);
          closeAppEditOverlay();
        });
      }
      if (appEditRenameInput && appEditSaveRenameBtn) {
        appEditRenameInput.addEventListener('keydown', function (e) {
          if (e.key === 'Enter') {
            e.preventDefault();
            appEditSaveRenameBtn.click();
          }
        });
      }
      if (appEditDeleteBtn) {
        appEditDeleteBtn.addEventListener('click', function () {
          if (!appEditTargetId) return;
          var t = getItemById(appEditTargetId);
          if (t && isProtectedAppLink(t)) return;
          deleteLibraryItem(appEditTargetId);
          renderLinks();
          if (currentFolderViewId) {
            var folderStillExists = !!getItemById(currentFolderViewId);
            if (folderStillExists) renderFolderViewOverlay(currentFolderViewId);
            else closeFolderViewOverlay();
          }
          closeAppEditOverlay();
        });
      }
      if (appEditCancelBtn) {
        appEditCancelBtn.addEventListener('click', closeAppEditOverlay);
      }
      if (appEditOverlay) {
        appEditOverlay.addEventListener('click', function (e) {
          if (e.target === appEditOverlay) closeAppEditOverlay();
        });
      }

      var folderOverlay = document.getElementById('folder-view-overlay');
      var folderCloseBtn = document.getElementById('folder-view-close-btn');
      if (folderCloseBtn) folderCloseBtn.addEventListener('click', closeFolderViewOverlay);
      if (folderOverlay) {
        folderOverlay.addEventListener('click', function (e) {
          if (e.target === folderOverlay) closeFolderViewOverlay();
        });
      }

      var bluelyMailOverlay = document.getElementById('bluely-mail-overlay');
      var bluelyMailCloseBtn = document.getElementById('bluely-mail-close-btn');
      if (bluelyMailCloseBtn) bluelyMailCloseBtn.addEventListener('click', closeBluelyMailOverlay);
      if (bluelyMailOverlay) {
        bluelyMailOverlay.addEventListener('click', function (e) {
          if (e.target === bluelyMailOverlay) closeBluelyMailOverlay();
        });
      }

      maybeMigrateLegacyAccountData();
      ensurePresetApps();
      launcherPageIndex = loadLauncherPageIndex();
      renderLinks();

      var launcherPagerPrev = document.getElementById('launcher-pager-prev');
      var launcherPagerNext = document.getElementById('launcher-pager-next');
      if (launcherPagerPrev) {
        launcherPagerPrev.addEventListener('click', function () { changeLauncherPage(-1); });
      }
      if (launcherPagerNext) {
        launcherPagerNext.addEventListener('click', function () { changeLauncherPage(1); });
      }
      updateBluelyMailBadge();
      renderUpcomingSchedules();
      renderAllSchedules();
      renderDailyMotivation();
      renderDailyQuests();
      renderGoals();
      renderAiChat();
      renderPoints();
      updateDailyStreakOnLogin();
      initThemeControls();
      renderDisplayName();
      initLocalClock();
      openWelcomeScreen({ forceEdit: false });
      // Games removed

      // Schedule: local date/time calendar
      var SCHEDULE_TZ = (Intl.DateTimeFormat().resolvedOptions().timeZone) || 'UTC';
      var scheduleViewYear = null;
      var scheduleViewMonth = null; // 0-11
      var SCHEDULE_CAL_TRANSITION_MS = 280;
      var SCHEDULE_DAY_TRANSITION_MS = 280;
      var lastScheduleCalKey = null;
      var lastScheduleDayKey = null;
      var scheduleCalNavDirection = 0;
      var scheduleCalendarControlsWired = false;
      var SCHEDULE_MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
        'September', 'October', 'November', 'December'];

      function getNowInScheduleZone() {
        var now = new Date();
        return new Date(now.toLocaleString('en-US', { timeZone: SCHEDULE_TZ }));
      }

      function countActivitiesForDate(dateKey) {
        return getActivities(dateKey).length;
      }

      function getTodayDateKey() {
        var nowTz = getNowInScheduleZone();
        var pad = function (n) { return (n < 10 ? '0' : '') + n; };
        return nowTz.getFullYear() + '-' + pad(nowTz.getMonth() + 1) + '-' + pad(nowTz.getDate());
      }

      function getScheduleCalKey() {
        return scheduleViewYear + '-' + scheduleViewMonth;
      }

      function getScheduleYearBounds() {
        var current = getNowInScheduleZone().getFullYear();
        return { min: current - 10, max: current + 10, current: current };
      }

      function buildScheduleNavPickerHtml(type, year, month) {
        var bounds = getScheduleYearBounds();
        var kicker = type === 'month' ? 'Month' : 'Year';
        var label = type === 'month' ? SCHEDULE_MONTH_NAMES[month] : String(year);
        var optionsHtml = '';
        if (type === 'month') {
          optionsHtml = SCHEDULE_MONTH_NAMES.map(function (name, idx) {
            var selected = idx === month;
            return '<button type="button" class="all-schedules-picker-option' + (selected ? ' is-selected' : '') +
              '" role="option" aria-selected="' + (selected ? 'true' : 'false') +
              '" data-picker-value="' + idx + '"><span class="all-schedules-picker-option-label">' + name + '</span></button>';
          }).join('');
        } else {
          for (var y = bounds.min; y <= bounds.max; y++) {
            var yearSelected = y === year;
            optionsHtml += '<button type="button" class="all-schedules-picker-option' + (yearSelected ? ' is-selected' : '') +
              '" role="option" aria-selected="' + (yearSelected ? 'true' : 'false') +
              '" data-picker-value="' + y + '"><span class="all-schedules-picker-option-label">' + y + '</span></button>';
          }
        }
        return '<div class="schedule-nav-picker all-schedules-picker" data-picker="' + type + '" id="schedule-' + type + '-picker">' +
          '<button type="button" class="all-schedules-picker-trigger schedule-nav-picker-trigger" aria-haspopup="listbox" aria-expanded="false">' +
            '<span class="all-schedules-picker-kicker">' + kicker + '</span>' +
            '<span class="all-schedules-picker-value schedule-nav-picker-value">' + label + '</span>' +
            '<span class="all-schedules-picker-chevron" aria-hidden="true">▾</span>' +
          '</button>' +
          '<div class="all-schedules-picker-menu schedule-nav-picker-menu picker-menu--scroll-3" role="listbox" aria-label="' + kicker + '" hidden>' +
            optionsHtml +
          '</div>' +
        '</div>';
      }

      function buildScheduleCalGridHtml(year, month) {
        var nowTz = getNowInScheduleZone();
        var todayDate = nowTz.getDate();
        var isCurrentMonth = (year === nowTz.getFullYear() && month === nowTz.getMonth());
        var firstDay = new Date(year, month, 1).getDay();
        var daysInMonth = new Date(year, month + 1, 0).getDate();
        var html = '';
        var pad = function (n) { return (n < 10 ? '0' : '') + n; };
        for (var i = 0; i < firstDay; i++) {
          html += '<div class="cal-cell cal-empty"></div>';
        }
        for (var day = 1; day <= daysInMonth; day++) {
          var isToday = isCurrentMonth && day === todayDate;
          var dateKey = year + '-' + pad(month + 1) + '-' + pad(day);
          var isSelected = currentScheduleDate === dateKey;
          var eventCount = countActivitiesForDate(dateKey);
          var hasEvents = eventCount > 0;
          html += '<div class="cal-cell cal-day' +
            (isSelected ? ' cal-selected' : '') +
            (isToday ? ' cal-today' : '') +
            (hasEvents ? ' cal-has-events' : '') +
            '" data-date="' + dateKey + '" role="button" tabindex="0" aria-label="' + day + (hasEvents ? ', ' + eventCount + ' activities' : '') + '">' +
            '<span class="cal-day-num">' + day + '</span>' +
            (hasEvents ? '<span class="cal-day-dots" aria-hidden="true"><span></span></span>' : '') +
            '</div>';
        }
        return html;
      }

      function syncScheduleNavPickers(year, month) {
        var monthPicker = document.getElementById('schedule-month-picker');
        var yearPicker = document.getElementById('schedule-year-picker');
        if (monthPicker) {
          var monthValue = monthPicker.querySelector('.schedule-nav-picker-value');
          if (monthValue) monthValue.textContent = SCHEDULE_MONTH_NAMES[month];
          monthPicker.querySelectorAll('.all-schedules-picker-option').forEach(function (btn) {
            var selected = parseInt(btn.getAttribute('data-picker-value'), 10) === month;
            btn.classList.toggle('is-selected', selected);
            btn.setAttribute('aria-selected', selected ? 'true' : 'false');
          });
        }
        if (yearPicker) {
          var yearValue = yearPicker.querySelector('.schedule-nav-picker-value');
          if (yearValue) yearValue.textContent = String(year);
          yearPicker.querySelectorAll('.all-schedules-picker-option').forEach(function (btn) {
            var selected = parseInt(btn.getAttribute('data-picker-value'), 10) === year;
            btn.classList.toggle('is-selected', selected);
            btn.setAttribute('aria-selected', selected ? 'true' : 'false');
          });
        }
      }

      function wireScheduleCalDayCells(calEl) {
        if (!calEl) return;
        calEl.querySelectorAll('.cal-day').forEach(function (cell) {
          cell.onclick = function () {
            var key = this.getAttribute('data-date');
            if (key) openDayPanel(key);
          };
          cell.onkeydown = function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
              e.preventDefault();
              var key = this.getAttribute('data-date');
              if (key) openDayPanel(key);
            }
          };
        });
      }

      function updateScheduleCalendarSelection() {
        var calEl = document.getElementById('schedule-calendar');
        if (!calEl) return;
        calEl.querySelectorAll('.cal-day').forEach(function (cell) {
          var key = cell.getAttribute('data-date');
          cell.classList.toggle('cal-selected', key === currentScheduleDate);
        });
      }

      function paintScheduleCalendarGrid() {
        var body = document.getElementById('schedule-cal-grid-body');
        if (!body) return;
        body.innerHTML = buildScheduleCalGridHtml(scheduleViewYear, scheduleViewMonth);
        wireScheduleCalDayCells(document.getElementById('schedule-calendar'));
      }

      function animateScheduleCalendarChange(paint) {
        var viewport = document.getElementById('schedule-cal-grid-viewport');
        if (!viewport) {
          paint();
          return;
        }
        var dirClass = scheduleCalNavDirection > 0 ? 'is-cal-forward' : 'is-cal-backward';
        viewport.classList.add('is-cal-exit', dirClass);
        window.setTimeout(function () {
          paint();
          viewport.classList.remove('is-cal-exit');
          viewport.classList.add('is-cal-enter', dirClass);
          requestAnimationFrame(function () {
            window.setTimeout(function () {
              viewport.classList.remove('is-cal-enter', 'is-cal-forward', 'is-cal-backward');
            }, SCHEDULE_CAL_TRANSITION_MS);
          });
        }, SCHEDULE_CAL_TRANSITION_MS);
      }

      function animateScheduleDayChange(paint) {
        var scrollEl = document.querySelector('#schedule-panel .schedule-day-activities-scroll');
        if (!scrollEl) {
          paint();
          return;
        }
        scrollEl.classList.add('is-day-exit');
        window.setTimeout(function () {
          paint();
          scrollEl.classList.remove('is-day-exit');
          scrollEl.classList.add('is-day-enter');
          requestAnimationFrame(function () {
            window.setTimeout(function () {
              scrollEl.classList.remove('is-day-enter');
            }, SCHEDULE_DAY_TRANSITION_MS);
          });
        }, SCHEDULE_DAY_TRANSITION_MS);
      }

      function ensureScheduleCalendarShell(calEl) {
        if (calEl.querySelector('#schedule-cal-grid-viewport')) return;
        var weekdayLabels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        var year = scheduleViewYear;
        var month = scheduleViewMonth;
        var headerHtml = '';
        weekdayLabels.forEach(function (d) {
          headerHtml += '<div class="cal-cell cal-head">' + d + '</div>';
        });
        calEl.innerHTML =
          '<div class="cal-toolbar">' +
            '<button type="button" class="cal-nav-btn" id="schedule-prev-month" aria-label="Previous month">‹</button>' +
            '<div class="cal-nav-selects">' +
              '<button type="button" class="cal-today-btn" id="schedule-jump-today">Today</button>' +
              buildScheduleNavPickerHtml('month', year, month) +
              buildScheduleNavPickerHtml('year', year, month) +
            '</div>' +
            '<button type="button" class="cal-nav-btn" id="schedule-next-month" aria-label="Next month">›</button>' +
          '</div>' +
          '<div class="cal-grid cal-grid-header">' + headerHtml + '</div>' +
          '<div class="schedule-cal-grid-viewport" id="schedule-cal-grid-viewport">' +
            '<div class="cal-grid" id="schedule-cal-grid-body"></div>' +
          '</div>';
        wireScheduleCalendarControls(calEl);
      }

      function wireScheduleNavPickers(calEl) {
        calEl.querySelectorAll('.schedule-nav-picker').forEach(function (picker) {
          var trigger = picker.querySelector('.all-schedules-picker-trigger');
          var menu = picker.querySelector('.all-schedules-picker-menu');
          if (!trigger || !menu) return;
          trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            var wasOpen = picker.classList.contains('is-open');
            closeAllSchedulesPickers();
            if (!wasOpen) openSchedulesPicker(picker, trigger, menu);
          });
          menu.addEventListener('click', function (e) {
            e.stopPropagation();
            var opt = e.target.closest('.all-schedules-picker-option');
            if (!opt) return;
            var pickerType = picker.getAttribute('data-picker');
            var value = parseInt(opt.getAttribute('data-picker-value'), 10);
            if (pickerType === 'month') {
              if (value === scheduleViewMonth) {
                closeAllSchedulesPickers();
                return;
              }
              scheduleCalNavDirection = value > scheduleViewMonth ? 1 : -1;
              if (value > scheduleViewMonth + 6) scheduleCalNavDirection = 1;
              if (value < scheduleViewMonth - 6) scheduleCalNavDirection = -1;
              scheduleViewMonth = value;
            } else {
              if (value === scheduleViewYear) {
                closeAllSchedulesPickers();
                return;
              }
              scheduleCalNavDirection = value > scheduleViewYear ? 1 : -1;
              scheduleViewYear = value;
            }
            closeAllSchedulesPickers();
            renderScheduleCalendar(true);
          });
        });
      }

      function wireScheduleCalendarControls(calEl) {
        if (scheduleCalendarControlsWired) return;
        scheduleCalendarControlsWired = true;
        wireScheduleNavPickers(calEl);
        var prevBtn = document.getElementById('schedule-prev-month');
        var nextBtn = document.getElementById('schedule-next-month');
        var todayBtn = document.getElementById('schedule-jump-today');
        if (prevBtn) {
          prevBtn.addEventListener('click', function () {
            scheduleCalNavDirection = -1;
            scheduleViewMonth -= 1;
            if (scheduleViewMonth < 0) {
              scheduleViewMonth = 11;
              scheduleViewYear -= 1;
            }
            renderScheduleCalendar(true);
          });
        }
        if (nextBtn) {
          nextBtn.addEventListener('click', function () {
            scheduleCalNavDirection = 1;
            scheduleViewMonth += 1;
            if (scheduleViewMonth > 11) {
              scheduleViewMonth = 0;
              scheduleViewYear += 1;
            }
            renderScheduleCalendar(true);
          });
        }
        if (todayBtn) {
          todayBtn.addEventListener('click', function () {
            var now = getNowInScheduleZone();
            scheduleViewYear = now.getFullYear();
            scheduleViewMonth = now.getMonth();
            scheduleCalNavDirection = 0;
            openDayPanel(getTodayDateKey());
          });
        }
      }

      function renderScheduleFormPriorityPicker() {
        var mount = document.getElementById('schedule-form-priority-mount');
        if (!mount) return;
        var hidden = document.getElementById('activity-priority');
        var priority = hidden ? hidden.value : 'none';
        mount.innerHTML = buildPriorityPickerHtml('form', 'new', priority);
        var picker = mount.querySelector('.activity-priority-picker');
        if (!picker) return;
        var trigger = picker.querySelector('.activity-priority-picker-trigger');
        var menu = picker.querySelector('.activity-priority-picker-menu');
        if (!trigger || !menu) return;
        trigger.addEventListener('click', function (e) {
          e.stopPropagation();
          var wasOpen = picker.classList.contains('is-open');
          closeAllSchedulesPickers();
          if (!wasOpen) openSchedulesPicker(picker, trigger, menu);
        });
        menu.addEventListener('click', function (e) {
          e.stopPropagation();
          var opt = e.target.closest('.all-schedules-picker-option');
          if (!opt) return;
          var value = opt.getAttribute('data-picker-value');
          if (!value) return;
          if (hidden) hidden.value = value;
          var badge = picker.querySelector('.activity-priority-picker-value');
          if (badge) {
            var normalized = normalizePriority(value);
            badge.textContent = getPriorityLabel(normalized);
            badge.className = 'activity-priority-picker-value schedule-priority-badge priority-' + normalized;
          }
          menu.querySelectorAll('.all-schedules-picker-option').forEach(function (btn) {
            var selected = btn.getAttribute('data-picker-value') === value;
            btn.classList.toggle('is-selected', selected);
            btn.setAttribute('aria-selected', selected ? 'true' : 'false');
          });
          picker.classList.remove('is-open');
          trigger.setAttribute('aria-expanded', 'false');
          hidePickerMenu(menu);
        });
      }

      function renderScheduleCalendar(animate, onDone) {
        var todayDateEl = document.getElementById('schedule-today-date');
        var todayTimeEl = document.getElementById('schedule-today-time');
        var calEl = document.getElementById('schedule-calendar');
        if (!calEl) return;

        var nowTz = getNowInScheduleZone();
        if (scheduleViewYear === null || scheduleViewMonth === null) {
          scheduleViewYear = nowTz.getFullYear();
          scheduleViewMonth = nowTz.getMonth();
        }
        var year = scheduleViewYear;
        var month = scheduleViewMonth;

        if (todayDateEl) {
          todayDateEl.textContent = nowTz.toLocaleDateString(undefined, {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
          });
        }
        if (todayTimeEl) {
          todayTimeEl.textContent = nowTz.toLocaleTimeString(undefined, {
            hour: 'numeric',
            minute: '2-digit'
          });
        }

        ensureScheduleCalendarShell(calEl);
        syncScheduleNavPickers(year, month);

        var calKey = getScheduleCalKey();
        var calChanged = animate && lastScheduleCalKey !== null && lastScheduleCalKey !== calKey;
        var paint = function () {
          paintScheduleCalendarGrid();
          lastScheduleCalKey = calKey;
          if (onDone) onDone();
        };

        if (calChanged) {
          animateScheduleCalendarChange(paint);
        } else {
          paint();
        }
      }

      var currentScheduleDate = null;

      function getActivities(dateKey) {
        try {
          var raw = localStorage.getItem(ACTIVITIES_STORAGE_KEY);
          var all = raw ? JSON.parse(raw) : {};
          var list = Array.isArray(all[dateKey]) ? all[dateKey] : [];
          var changed = false;
          list = list.map(function (act) {
            var normalized = normalizeActivity(act);
            if (!act || !act.id || !act.status) changed = true;
            return normalized;
          });
          if (changed) {
            all[dateKey] = list;
            localStorage.setItem(ACTIVITIES_STORAGE_KEY, JSON.stringify(all));
          }
          return list;
        } catch (e) { return []; }
      }

      function saveActivities(dateKey, list) {
        try {
          var raw = localStorage.getItem(ACTIVITIES_STORAGE_KEY);
          var all = raw ? JSON.parse(raw) : {};
          all[dateKey] = (Array.isArray(list) ? list : []).map(normalizeActivity);
          localStorage.setItem(ACTIVITIES_STORAGE_KEY, JSON.stringify(all));
        } catch (e) {}
      }

      function ampmTo24(hour, min, ampm) {
        var h = parseInt(hour, 10);
        if (ampm === 'PM') h = h === 12 ? 12 : h + 12;
        else h = h === 12 ? 0 : h;
        var m = (min === '' || min === null) ? 0 : parseInt(min, 10);
        return (h < 10 ? '0' : '') + h + ':' + (m < 10 ? '0' : '') + m;
      }

      function formatTime24ToAmPm(t) {
        var parts = t.split(':');
        var h = parseInt(parts[0], 10);
        var m = parts[1] || '00';
        var ampm = h >= 12 ? 'PM' : 'AM';
        h = h % 12;
        if (h === 0) h = 12;
        return h + ':' + m + ' ' + ampm;
      }

      function openDayPanel(dateKey) {
        var prevDay = currentScheduleDate;
        var prevCalKey = scheduleViewYear !== null && scheduleViewMonth !== null ? getScheduleCalKey() : null;
        currentScheduleDate = dateKey;
        var parts = dateKey.split('-');
        if (parts.length === 3) {
          scheduleViewYear = parseInt(parts[0], 10);
          scheduleViewMonth = parseInt(parts[1], 10) - 1;
        }
        var newCalKey = getScheduleCalKey();
        var calChanged = prevCalKey !== null && prevCalKey !== newCalKey;
        var dayChanged = prevDay !== null && prevDay !== dateKey;

        function updateDayPanelHeader() {
          var d = new Date(parseInt(parts[0], 10), parseInt(parts[1], 10) - 1, parseInt(parts[2], 10));
          var titleEl = document.getElementById('schedule-day-panel-title');
          var subtitleEl = document.getElementById('schedule-day-panel-subtitle');
          if (titleEl) {
            titleEl.textContent = d.toLocaleDateString(undefined, { weekday: 'long', month: 'long', day: 'numeric' });
          }
          if (subtitleEl) {
            subtitleEl.textContent = d.toLocaleDateString(undefined, { year: 'numeric' }) + ' · tap activities to focus or change priority';
          }
        }

        function finishDayPanel() {
          updateDayPanelHeader();
          renderDayActivities();
          lastScheduleDayKey = dateKey;
          var panel = document.getElementById('schedule-day-panel');
          if (panel) panel.classList.add('is-open');
        }

        function afterCalendar() {
          if (dayChanged) {
            animateScheduleDayChange(finishDayPanel);
          } else {
            finishDayPanel();
          }
        }

        if (calChanged) {
          var prevParts = prevCalKey.split('-');
          scheduleCalNavDirection = scheduleViewYear > parseInt(prevParts[0], 10) ||
            (scheduleViewYear === parseInt(prevParts[0], 10) && scheduleViewMonth > parseInt(prevParts[1], 10))
            ? 1 : -1;
          renderScheduleCalendar(true, afterCalendar);
        } else {
          renderScheduleCalendar(false, afterCalendar);
        }
      }



      function ensureScheduleDaySelected() {
        if (!currentScheduleDate) {
          openDayPanel(getTodayDateKey());
        }
      }

      function renderDayActivities() {
        var listEl = document.getElementById('schedule-day-activities');
        var emptyEl = document.getElementById('schedule-day-empty');
        var countEl = document.getElementById('schedule-activity-count');
        if (!listEl || !currentScheduleDate) return;
        var activities = getActivities(currentScheduleDate);
        activities.sort(function (a, b) {
          if (getPriorityRank(a.priority) !== getPriorityRank(b.priority)) {
            return getPriorityRank(a.priority) - getPriorityRank(b.priority);
          }
          return (a.start || '').localeCompare(b.start || '');
        });
        if (countEl) {
          countEl.textContent = String(activities.length);
          countEl.hidden = activities.length === 0;
        }
        if (emptyEl) emptyEl.hidden = activities.length > 0;
        listEl.innerHTML = '';
        activities.forEach(function (act) {
          var li = document.createElement('li');
          li.className = 'schedule-day-activity-item' + (act.status === 'done' ? ' is-done' : '');
          li.style.setProperty('--activity-color', act.color || '#6b9aed');
          var timeLabel = formatTime24ToAmPm(act.start || '00:00');
          if (act.end) timeLabel += ' – ' + formatTime24ToAmPm(act.end);
          li.innerHTML =
            '<div class="schedule-day-activity-main">' +
              '<span class="schedule-day-activity-time">' + timeLabel + '</span>' +
              '<span class="schedule-day-activity-name">' + (act.name || 'Activity') + '</span>' +
              '<span class="schedule-priority-badge priority-' + normalizePriority(act.priority) + '">' + getPriorityLabel(act.priority) + '</span>' +
            '</div>' +
            '<div class="schedule-day-activity-actions">' +
            buildPriorityPickerHtml(currentScheduleDate, act.id, act.priority) +
            (act.status !== 'done' ? '<button type="button" class="upcoming-status-btn focus-mode-btn" data-date="' + currentScheduleDate + '" data-id="' + act.id + '">Focus</button>' : '<span class="schedule-done-label">Done</span>') +
            '<button type="button" class="schedule-day-activity-remove" data-id="' + act.id + '" aria-label="Remove">×</button>' +
            '</div>';
          listEl.appendChild(li);
        });
        listEl.querySelectorAll('.schedule-day-activity-remove').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var activityId = this.getAttribute('data-id');
            var list = getActivities(currentScheduleDate);
            var next = list.filter(function (act) { return act.id !== activityId; });
            saveActivities(currentScheduleDate, next);
            renderDayActivities();
            renderUpcomingSchedules();
            renderAllSchedules();
            renderDailyQuests();
          });
        });
        wireScheduleItemActions(listEl, { showDelete: false });
        paintScheduleCalendarGrid();
      }

      /** Parse typed time "9:30", "9:3", "12" -> { hour: 1-12, min: 0-59 } or null */
      function parseTimeInput(str) {
        if (!str || typeof str !== 'string') return null;
        str = str.trim().replace(/\s/g, '');
        var parts = str.split(':');
        var h = parseInt(parts[0], 10);
        var m = parts.length > 1 ? parseInt(parts[1], 10) : 0;
        if (isNaN(h) || h < 1 || h > 12) return null;
        if (isNaN(m) || m < 0 || m > 59) m = 0;
        return { hour: h, min: m };
      }

      function setupTimeInput(el) {
        if (!el) return;
        el.addEventListener('input', function () {
          var v = this.value.replace(/[^\d:]/g, '');
          if (v.length >= 2 && v.indexOf(':') === -1) {
            v = v.slice(0, 2) + ':' + v.slice(2);
          }
          this.value = v.slice(0, 5);
        });
      }
      setupTimeInput(document.getElementById('activity-start-time'));

      var scheduleColorSwatches = document.getElementById('schedule-color-swatches');
      var scheduleColorInput = document.getElementById('activity-color');
      var DEFAULT_ACTIVITY_COLOR = '#6b9aed';

      function syncScheduleColorSwatches(color) {
        if (!scheduleColorSwatches) return;
        scheduleColorSwatches.querySelectorAll('.schedule-color-swatch').forEach(function (btn) {
          btn.classList.toggle('is-active', btn.getAttribute('data-color') === color);
        });
      }

      function setScheduleActivityColor(color) {
        var safe = color || DEFAULT_ACTIVITY_COLOR;
        if (scheduleColorInput) scheduleColorInput.value = safe;
        syncScheduleColorSwatches(safe);
      }

      if (scheduleColorSwatches) {
        scheduleColorSwatches.addEventListener('click', function (e) {
          var btn = e.target.closest('.schedule-color-swatch');
          if (!btn) return;
          setScheduleActivityColor(btn.getAttribute('data-color'));
        });
        setScheduleActivityColor(scheduleColorInput ? scheduleColorInput.value : DEFAULT_ACTIVITY_COLOR);
      }

      var dayForm = document.getElementById('schedule-day-add-form');
      if (dayForm) {
        dayForm.addEventListener('submit', function (e) {
          e.preventDefault();
          if (!currentScheduleDate) return;
          var nameEl = document.getElementById('activity-name');
          var colorEl = document.getElementById('activity-color');
          var startTimeStr = (document.getElementById('activity-start-time') && document.getElementById('activity-start-time').value) || '';
          var startAmpm = (document.getElementById('activity-start-ampm') && document.getElementById('activity-start-ampm').value) || 'AM';
          var startParsed = parseTimeInput(startTimeStr);
          if (!startParsed) {
            alert('Please enter a start time (e.g. 9:30).');
            return;
          }
          var start = ampmTo24(String(startParsed.hour), startParsed.min, startAmpm);
          var list = getActivities(currentScheduleDate);
          var priorityEl = document.getElementById('activity-priority');
          list.push({
            id: generateActivityId(),
            start: start,
            status: 'pending',
            name: (nameEl && nameEl.value) ? nameEl.value.trim() : 'Activity',
            color: (colorEl && colorEl.value) ? colorEl.value : DEFAULT_ACTIVITY_COLOR,
            priority: priorityEl ? normalizePriority(priorityEl.value) : 'none'
          });
          saveActivities(currentScheduleDate, list);
          renderDayActivities();
          renderUpcomingSchedules();
          renderAllSchedules();
          renderDailyQuests();
          if (nameEl) nameEl.value = '';
          var startInput = document.getElementById('activity-start-time');
          if (startInput) startInput.value = '';
          if (priorityEl) priorityEl.value = 'none';
          renderScheduleFormPriorityPicker();
          setScheduleActivityColor(DEFAULT_ACTIVITY_COLOR);
        });
      }

      renderScheduleFormPriorityPicker();

      // If user lands on schedule directly (e.g. future deep link)
      if (document.getElementById('schedule-panel') &&
          !document.getElementById('schedule-panel').hidden) {
        renderScheduleCalendar();
      }
      renderUpcomingSchedules();
      renderAllSchedules();

      var sidebarMainBtn = document.getElementById('sidebar-main-btn');
      if (sidebarMainBtn) {
        sidebarMainBtn.addEventListener('click', function () {
          if (sidebarMainBtn.classList.contains('is-active')) return;
          playPageTransition(function () {
            setActivePanel('apps');
          });
        });
      }
      var sidebarScheduleBtn = document.getElementById('sidebar-schedule-btn');
      if (sidebarScheduleBtn) {
        sidebarScheduleBtn.addEventListener('click', function () {
          if (sidebarScheduleBtn.classList.contains('is-active')) return;
          playPageTransition(function () {
            setActivePanel('schedule');
            ensureScheduleDaySelected();
          });
        });
      }
      var sidebarWhiteboardBtn = document.getElementById('sidebar-whiteboard-btn');
      if (sidebarWhiteboardBtn) {
        sidebarWhiteboardBtn.addEventListener('click', function () {
          if (sidebarWhiteboardBtn.classList.contains('is-active')) return;
          playPageTransition(function () {
            setActivePanel('whiteboard');
          });
        });
      }
      var sidebarGoalsBtn = document.getElementById('sidebar-goals-btn');
      if (sidebarGoalsBtn) {
        sidebarGoalsBtn.addEventListener('click', function () {
          if (sidebarGoalsBtn.classList.contains('is-active')) return;
          playPageTransition(function () {
            setActivePanel('goals');
          });
        });
      }
      var sidebarAiBtn = document.getElementById('sidebar-ai-btn');
      if (sidebarAiBtn) {
        sidebarAiBtn.addEventListener('click', function () {
          if (sidebarAiBtn.classList.contains('is-active')) return;
          playPageTransition(function () {
            setActivePanel('ai');
          });
        });
      }
      var sidebarCustomisationBtn = document.getElementById('sidebar-customisation-btn');
      if (sidebarCustomisationBtn) {
        sidebarCustomisationBtn.addEventListener('click', function () {
          if (sidebarCustomisationBtn.classList.contains('is-active')) return;
          playPageTransition(function () {
            setActivePanel('customisation');
          });
        });
      }

      var goalsAddForm = document.getElementById('goals-add-form');
      if (goalsAddForm) {
        goalsAddForm.addEventListener('submit', function (e) {
          e.preventDefault();
          var titleEl = document.getElementById('goal-title-input');
          var notesEl = document.getElementById('goal-notes-input');
          var dateEl = document.getElementById('goal-date-input');
          var remindEl = document.getElementById('goal-remind-login');
          var title = titleEl ? titleEl.value.trim() : '';
          if (!title) return;
          var goals = getGoals();
          goals.push(normalizeGoal({
            title: title,
            notes: notesEl ? notesEl.value.trim() : '',
            targetDate: dateEl ? dateEl.value : '',
            remindOnLogin: remindEl ? remindEl.checked : true,
            completed: false
          }));
          saveGoals(goals);
          goalsAddForm.reset();
          if (remindEl) remindEl.checked = true;
          renderGoals();
        });
      }

      function submitAiComposer() {
        var aiComposerInput = document.getElementById('ai-composer-input');
        if (!aiComposerInput || aiSending) return;
        var text = aiComposerInput.value.trim();
        if (!text) return;
        aiComposerInput.value = '';
        aiSending = true;
        sendAiMessage(text).finally(function () {
          aiSending = false;
          aiComposerInput.focus();
        });
      }

      var aiComposerForm = document.getElementById('ai-composer-form');
      var aiComposerInput = document.getElementById('ai-composer-input');
      var aiSending = false;
      if (aiComposerForm && aiComposerInput) {
        aiComposerForm.addEventListener('submit', function (e) {
          e.preventDefault();
          submitAiComposer();
        });
      }
      document.querySelectorAll('.ai-suggestion-chip').forEach(function (chip) {
        chip.addEventListener('click', function () {
          var prompt = chip.getAttribute('data-prompt');
          if (!prompt || aiSending) return;
          var input = document.getElementById('ai-composer-input');
          if (input) input.value = prompt;
          submitAiComposer();
        });
      });
      var aiSettingsToggle = document.getElementById('ai-settings-toggle');
      var aiSettingsDrawer = document.getElementById('ai-settings-drawer');
      if (aiSettingsToggle && aiSettingsDrawer) {
        aiSettingsToggle.addEventListener('click', function () {
          var open = aiSettingsDrawer.hidden;
          aiSettingsDrawer.hidden = !open;
          aiSettingsToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
          if (open) syncAiMemoryInputs();
        });
      }
      var aiSaveMemoryBtn = document.getElementById('ai-save-memory-btn');
      if (aiSaveMemoryBtn) {
        aiSaveMemoryBtn.addEventListener('click', function () {
          saveAiMemory({
            habits: (document.getElementById('ai-memory-habits') || {}).value || '',
            likes: (document.getElementById('ai-memory-likes') || {}).value || '',
            hobbies: (document.getElementById('ai-memory-hobbies') || {}).value || ''
          });
          setAiStatus('Memory saved — Bluely will remember this.', false);
          setTimeout(function () { setAiStatus('', false); }, 2500);
        });
      }
      syncAiMemoryInputs();

      purgeExpiredAiNextDayPlan();
      scheduleAiNextDayPlanExpiry();
      updateAiNextDayPlanSideBtn();

      var aiChatLog = document.getElementById('ai-chat-log');
      if (aiChatLog) {
        aiChatLog.addEventListener('click', function (e) {
          var btn = e.target.closest('[data-ai-action]');
          if (!btn) return;
          var row = btn.closest('.ai-chat-row--assistant');
          if (!row) return;
          var action = btn.getAttribute('data-ai-action');
          if (action === 'copy') copyAiChatRowText(row);
          else if (action === 'add-plan') applyAiNextDayPlanFromRow(row);
        });
      }

      var aiNextDayPlanSideBtn = document.getElementById('ai-next-day-plan-side-btn');
      if (aiNextDayPlanSideBtn) {
        aiNextDayPlanSideBtn.addEventListener('click', openAiNextDayPlanOverlay);
      }
      var aiNextDayPlanCloseBtn = document.getElementById('ai-next-day-plan-close-btn');
      var aiNextDayPlanDismissBtn = document.getElementById('ai-next-day-plan-dismiss-btn');
      if (aiNextDayPlanCloseBtn) aiNextDayPlanCloseBtn.addEventListener('click', closeAiNextDayPlanOverlay);
      if (aiNextDayPlanDismissBtn) aiNextDayPlanDismissBtn.addEventListener('click', closeAiNextDayPlanOverlay);
      var aiNextDayPlanViewOverlay = document.getElementById('ai-next-day-plan-overlay');
      if (aiNextDayPlanViewOverlay) {
        aiNextDayPlanViewOverlay.addEventListener('click', function (e) {
          if (e.target === aiNextDayPlanViewOverlay) closeAiNextDayPlanOverlay();
        });
      }

      var aiNextDayPlanConfirmBtn = document.getElementById('ai-next-day-plan-confirm-btn');
      var aiNextDayPlanCancelBtn = document.getElementById('ai-next-day-plan-cancel-btn');
      if (aiNextDayPlanConfirmBtn) {
        aiNextDayPlanConfirmBtn.addEventListener('click', function () {
          var pending = aiNextDayPlanReplacePending;
          closeAiNextDayPlanReplaceConfirm();
          if (typeof pending === 'function') pending();
        });
      }
      if (aiNextDayPlanCancelBtn) {
        aiNextDayPlanCancelBtn.addEventListener('click', closeAiNextDayPlanReplaceConfirm);
      }
      var aiNextDayPlanConfirmOverlay = document.getElementById('ai-next-day-plan-confirm-overlay');
      if (aiNextDayPlanConfirmOverlay) {
        aiNextDayPlanConfirmOverlay.addEventListener('click', function (e) {
          if (e.target === aiNextDayPlanConfirmOverlay) closeAiNextDayPlanReplaceConfirm();
        });
      }

      var aiRestoreChatBtn = document.getElementById('ai-restore-chat-btn');
      if (aiRestoreChatBtn) {
        aiRestoreChatBtn.addEventListener('click', function () {
          restorePreviousAiChat();
          if (aiSettingsDrawer) aiSettingsDrawer.hidden = true;
          if (aiSettingsToggle) aiSettingsToggle.setAttribute('aria-expanded', 'false');
        });
      }
      var aiNewChatBtn = document.getElementById('ai-new-chat-btn');
      if (aiNewChatBtn) {
        aiNewChatBtn.addEventListener('click', function () {
          startNewAiChat();
          if (aiSettingsDrawer) aiSettingsDrawer.hidden = true;
          if (aiSettingsToggle) aiSettingsToggle.setAttribute('aria-expanded', 'false');
        });
      }
      var sidebarFocusBtn = document.getElementById('sidebar-focus-btn');
      if (sidebarFocusBtn) {
        sidebarFocusBtn.addEventListener('click', function () {
          playPageTransition(function () {
            openFreeFocusMode();
          });
        });
      }

      var viewAllSchedulesBtn = document.getElementById('upcoming-view-all-btn');
      if (viewAllSchedulesBtn) {
        viewAllSchedulesBtn.addEventListener('click', function () {
          playPageTransition(function () {
            setActivePanel('all_schedules');
          });
        });
      }
      var allSchedulesBackBtn = document.getElementById('all-schedules-back-btn');
      if (allSchedulesBackBtn) {
        allSchedulesBackBtn.addEventListener('click', function () {
          playPageTransition(function () {
            setActivePanel('apps');
          });
        });
      }
      var tidalStoreBackBtn = document.getElementById('tidal-store-back-btn');
      if (tidalStoreBackBtn) {
        tidalStoreBackBtn.addEventListener('click', function () {
          playPageTransition(function () {
            setActivePanel('apps');
          });
        });
      }
      var tidalStoreSearchEl = document.getElementById('tidal-store-search');
      if (tidalStoreSearchEl) {
        tidalStoreSearchEl.addEventListener('input', renderTidalStore);
      }
      var tidalStoreAllAppsBtn = document.getElementById('tidal-store-all-apps-btn');
      if (tidalStoreAllAppsBtn) {
        tidalStoreAllAppsBtn.addEventListener('click', function () {
          tidalStoreShowAll = !tidalStoreShowAll;
          renderTidalStore();
        });
      }
      var storeAppOverlay = document.getElementById('store-app-overlay');
      var storeAppCloseBtn = document.getElementById('store-app-close-btn');
      var storeAppAddBtn = document.getElementById('store-app-add-btn');
      if (storeAppCloseBtn) storeAppCloseBtn.addEventListener('click', closeStoreAppOverlay);
      if (storeAppOverlay) {
        storeAppOverlay.addEventListener('click', function (e) {
          if (e.target === storeAppOverlay) closeStoreAppOverlay();
        });
      }
      if (storeAppAddBtn) {
        storeAppAddBtn.addEventListener('click', function () {
          if (!activeStoreApp || hasAppInMenu(activeStoreApp.url)) return;
          var links = getLinks();
          links.push({
            id: generateLibraryItemId(),
            type: 'link',
            url: activeStoreApp.url,
            name: activeStoreApp.name,
            folderId: null
          });
          saveLinks(links);
          renderLinks();
          renderTidalStore();
          openStoreAppOverlay(activeStoreApp);
        });
      }
      (function wireAllSchedulesPickers() {
        document.querySelectorAll('.all-schedules-picker').forEach(function (picker) {
          var trigger = picker.querySelector('.all-schedules-picker-trigger');
          var menu = picker.querySelector('.all-schedules-picker-menu');
          if (!trigger || !menu) return;
          trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            var wasOpen = picker.classList.contains('is-open');
            closeAllSchedulesPickers();
            if (!wasOpen) openSchedulesPicker(picker, trigger, menu);
          });
          menu.addEventListener('click', function (e) {
            var opt = e.target.closest('.all-schedules-picker-option');
            if (!opt) return;
            var value = opt.getAttribute('data-picker-value');
            if (!value) return;
            if (picker.getAttribute('data-picker') === 'date') {
              allSchedulesDateFilter = value;
            } else {
              allSchedulesSortMode = value;
            }
            closeAllSchedulesPickers();
            renderAllSchedules();
          });
        });
        document.addEventListener('click', function () {
          closeAllSchedulesPickers();
        });
        document.addEventListener('keydown', function (e) {
          if (e.key === 'Escape') closeAllSchedulesPickers();
        });
      })();
      var allSchedulesSearchEl = document.getElementById('all-schedules-search');
      if (allSchedulesSearchEl) {
        allSchedulesSearchEl.addEventListener('input', function () {
          allSchedulesSearchQuery = allSchedulesSearchEl.value || '';
          renderAllSchedules();
        });
      }
      document.querySelectorAll('.all-schedules-chip').forEach(function (chip) {
        chip.addEventListener('click', function () {
          allSchedulesStatusFilter = chip.getAttribute('data-status-filter') || 'all';
          renderAllSchedules();
        });
      });

      if (focusModeToggleBtn) {
        focusModeToggleBtn.addEventListener('click', function () {
          if (!focusContext) return;
          if (focusContext.mode === 'free') {
            if (freeFocusModeType === 'timer') {
              if (freeTimerEndsAt) {
                freeTimerRemainingMs = Math.max(0, freeTimerEndsAt - Date.now());
                freeTimerEndsAt = null;
              } else if (freeTimerRemainingMs > 0) {
                freeTimerEndsAt = Date.now() + freeTimerRemainingMs;
              } else if (freeTimerDurationMs > 0) {
                freeTimerRemainingMs = freeTimerDurationMs;
                freeTimerEndsAt = Date.now() + freeTimerRemainingMs;
              }
            } else {
              if (freeFocusStartedAt) {
                freeFocusElapsedMs += Math.max(0, Date.now() - freeFocusStartedAt);
                freeFocusStartedAt = null;
              } else {
                freeFocusStartedAt = Date.now();
              }
            }
            updateFocusView();
            return;
          }
          var act = getActivityById(focusContext.dateKey, focusContext.id);
          if (!act) return;
          setActivityStatus(focusContext.dateKey, focusContext.id, act.status === 'in_progress' ? 'pending' : 'in_progress');
          updateFocusView();
          renderUpcomingSchedules();
          renderAllSchedules();
          if (currentScheduleDate === focusContext.dateKey) renderDayActivities();
        });
      }
      if (focusModeDoneBtn) {
        focusModeDoneBtn.addEventListener('click', function () {
          if (!focusContext) return;
          if (focusContext.mode === 'free') {
            closeFocusMode();
            return;
          }
          setActivityStatus(focusContext.dateKey, focusContext.id, 'done');
          renderUpcomingSchedules();
          renderAllSchedules();
          if (currentScheduleDate === focusContext.dateKey) renderDayActivities();
          renderDailyQuests();
          closeFocusMode();
        });
      }
      if (focusModeExitBtn) {
        focusModeExitBtn.addEventListener('click', closeFocusMode);
      }
      if (focusModeStartTimerBtn && focusModeMinutesInput) {
        focusModeStartTimerBtn.addEventListener('click', function () {
          if (!focusContext || focusContext.mode !== 'free') return;
          var mins = parseInt(focusModeMinutesInput.value || '', 10);
          if (isNaN(mins) || mins < 1) {
            focusModeMinutesInput.focus();
            return;
          }
          var ms = mins * 60 * 1000;
          freeFocusModeType = 'timer';
          freeTimerDurationMs = ms;
          freeTimerRemainingMs = ms;
          freeTimerEndsAt = Date.now() + ms;
          freeFocusStartedAt = null;
          updateFocusView();
        });
      }
      if (focusModeBackStopwatchBtn) {
        focusModeBackStopwatchBtn.addEventListener('click', function () {
          if (!focusContext || focusContext.mode !== 'free') return;
          freeFocusModeType = 'stopwatch';
          freeTimerDurationMs = 0;
          freeTimerRemainingMs = 0;
          freeTimerEndsAt = null;
          freeFocusElapsedMs = 0;
          freeFocusStartedAt = Date.now();
          updateFocusView();
        });
      }
      if (focusModeOverlay) {
        focusModeOverlay.addEventListener('click', function (e) {
          if (e.target === focusModeOverlay) closeFocusMode();
        });
      }

      document.addEventListener('keydown', function (e) {
        if (e.key !== 'Escape') return;
        if (stylePurchaseOverlay && stylePurchaseOverlay.classList.contains('is-open')) {
          closeStylePurchaseOverlay();
        }
      });

      document.addEventListener('click', function (e) {
        var target = e.target;
        if (!target || !target.closest) return;
        var btn = target.closest('button');
        if (!btn || btn.disabled) return;
        playButtonClickSound(btn);
      }, true);

      setInterval(function () {
        if (!hasInProgressSchedules()) return;
        var appsPanel = document.getElementById('apps-panel');
        var allPanel = document.getElementById('all-schedules-panel');
        if (appsPanel && appsPanel.classList.contains('app-panel-active')) renderUpcomingSchedules();
        if (allPanel && allPanel.classList.contains('app-panel-active')) renderAllSchedules();
        if (focusContext) updateFocusView();
      }, 1000);

      document.querySelectorAll('.app-sidebar-item[href], .app-logout').forEach(function (link) {
        link.addEventListener('click', function (e) {
          if (e.defaultPrevented) return;
          if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
          if (e.button !== 0) return;
          e.preventDefault();
          var href = link.getAttribute('href');
          if (!href) return;
          playPageTransition(function () {
            window.location.href = href;
          });
        });
      });
    })();
  </script>
</body>
</html>
