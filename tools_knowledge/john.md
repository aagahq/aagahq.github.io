# John the Ripper

John the Ripper is a fast password cracker. Its primary purpose is to detect weak Unix passwords, but it supports many other hashes.

## Key Features
- **Cracking Modes**: Includes "single crack", wordlist, incremental, and external modes.
- **Customizable Rules**: Powerful rules for mangling wordlists (e.g., adding numbers, changing case).
- **Supports Many Hashes**: UNIX, Windows, database, and many anderen.

## Common Commands
- `john <password_file>`: Standard cracking mode.
- `john --wordlist=<wordlist> <password_file>`: Wordlist-based cracking.
- `john --rules --wordlist=<wordlist> <password_file>`: Wordlist with rules.
- `john --incremental <password_file>`: Bruteforce mode.
- `john --show <password_file>`: Show successfully cracked passwords.

## Best Practices
- Start with simple "single crack" or small wordlists.
- Use a GPU-accelerated version (John the Ripper Jumbo) if available for faster cracking.
- Always obtain permission before attempting to crack passwords.
