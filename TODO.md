# Career Guidance Website - TODO

## Plan
Build a simple PHP-based career guidance website for 12th-class students. Keep it beginner-friendly (not too high-level).

## Steps
1. [x] Create `index.html` – Form page for Stream and Percentage input
2. [x] Create `result.php` – PHP page to process form and display career + college suggestions
3. [x] Create `style.css` – Simple, clean, responsive styling
4. [x] Test the flow by submitting the form and verifying results
5. [x] Create `careers.json` – External JSON file for career data
6. [x] Update `index.html` – Removed name input field
7. [x] Update `result.php` – Read career data from JSON file dynamically
8. [x] Split Science into PCM/PCB with different career suggestions

## Tech Stack
- PHP (server-side form processing and JSON parsing)
- HTML (structure)
- CSS (styling)
- JSON (external data storage)

## Changes Summary
- **Added careers.json**: Contains all career data organized by stream and tier
- **Removed name input**: Form now only requires Stream and Percentage
- **Dynamic data loading**: result.php reads from careers.json instead of hardcoded arrays

## Science Stream Split - PCM vs PCB
- **Science_PCM**: Career suggestions focused on engineering, mathematics, physics, architecture, computer applications
  - High tier: B.Tech/B.E., B.Arch, B.Sc (Hons) Mathematics/Physics, Integrated M.Sc
  - Mid tier: B.Tech in state colleges, BCA, B.Sc IT, Diploma lateral entry
  - Low tier: Diploma in Engineering, ITI trades, B.Sc distance mode

- **Science_PCB**: Career suggestions focused on medical, nursing, pharmacy, life sciences
  - High tier: MBBS, BDS, B.V.Sc, B.Sc (Hons) Biology/Biotechnology, B.Pharmacy
  - Mid tier: B.Sc Nursing, B.Pharmacy, B.Sc Biotechnology, Paramedical degree, BAMS/BHMS
  - Low tier: Paramedical diploma, D.Pharm, GNM Nursing, B.Sc distance mode
