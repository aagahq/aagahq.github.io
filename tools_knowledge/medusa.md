# Medusa

Medusa is a speedy, parallel, and modular, login brute-forcer. It supports many protocols and can be extended with modules.

## Key Features
- **Parallel Brute-forcing**: Can test multiple hosts, users, and passwords simultaneously.
- **Modular Architecture**: Supports many protocols through modules (SSH, HTTP, FTP, etc.).
- **Flexible Options**: Allows fine-tuning of brute-force attempts.

## Common Commands
- `medusa -h <target_ip> -u <user> -P <password_file> -M <module>`: Brute-force a specific service on a target.
- `medusa -h 192.168.1.10 -u admin -P /path/to/passwords.txt -M ssh`: Brute-force SSH.
- `medusa -d`: List all available modules.

## Best Practices
- Start with a low number of parallel threads to avoid overwhelming the target.
- Use targeted wordlists.
- Always obtain permission before attempting to brute-force logins.
