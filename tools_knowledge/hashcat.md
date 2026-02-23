# Hashcat

Hashcat is the world's fastest and most advanced password recovery utility, supporting over 300 highly-optimized hashing algorithms. It can perform various attack types and supports CPU, GPU, and other hardware acceleration.

## Key Features
- **Speed**: Optimized for high-performance password cracking.
- **Multiple Attack Modes**: Supports brute-force, dictionary, hybrid, mask, and rule-based attacks.
- **Vast Algorithm Support**: Handles hundreds of hash types, including MD5, SHA-1, NTLM, and many more.
- **Scalability**: Can be used on single systems or distributed across multiple GPUs and machines.

## Common Commands
- `hashcat -m <hash_type> <hash_file> <wordlist>`: Basic dictionary attack.
- `hashcat -m <hash_type> -a 3 <hash_file> ?a?a?a?a?a?a`: Brute-force attack (6 characters).
- `hashcat -m <hash_type> <hash_file> <wordlist> -r <rule_file>`: Rule-based attack.
- `hashcat -m <hash_type> --show <hash_file>`: Show successfully cracked passwords.

## Best Practices
- Use a GPU-accelerated environment for significantly faster cracking.
- Choose the correct hash type (`-m`) for the hashes you're attacking.
- Utilize rule files (e.g., `best64.rule`) to increase the effectiveness of dictionary attacks.
