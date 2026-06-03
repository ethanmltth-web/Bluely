#!/usr/bin/env python3
"""Build GitHub Pages–ready HTML from PHP sources (no PHP left in output)."""
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parent


def strip_php_header(text: str) -> str:
    return re.sub(r"<\?php\s*// Auth removed[\s\S]*?\?>\s*", "", text, count=1)


def strip_all_php(text: str) -> str:
    text = strip_php_header(text)
    text = re.sub(r"<\?php[\s\S]*?\?>", "", text)
    return text


def php_to_html(src_name, dst_name, extra_replacements=None):
    src = ROOT / src_name
    dst = ROOT / dst_name
    text = src.read_text(encoding="utf-8")
    text = strip_all_php(text)
    replacements = {
        "app.php": "app.html",
        "whiteboard.php": "whiteboard.html",
        "login.php": "app.html",
        "logout.php": "app.html",
        "callback.php": "app.html",
    }
    if extra_replacements:
        replacements.update(extra_replacements)
    for old, new in replacements.items():
        text = text.replace(old, new)
    dst.write_text(encoding="utf-8", data=text)
    print(f"Wrote {dst_name} ({len(text)} bytes)")


def main() -> None:
    php_to_html("app.php", "app.html")
    php_to_html("whiteboard.php", "whiteboard.html")
    for name in ("login.php", "logout.php", "callback.php"):
        php_to_html(name, name.replace(".php", ".html"))
    (ROOT / ".nojekyll").touch(exist_ok=True)
    print("Done. Upload app.html, styles.css, whiteboard.html, index.html, .nojekyll")


if __name__ == "__main__":
    main()
