# Hydra

Hydra is a parallelized login cracker which supports numerous protocols to attack. It is very fast and flexible, and new modules are easy to add.

## Key Features
- **Parallelized**: Supports many concurrent connections.
- **Multitude of Protocols**: Supports telnet, ftp, http, https, smb, several databases, and much more.
- **Flexible Options**: Allows fine-tuning of login attempts (users, passwords, wordlists).

## Common Commands
- `hydra -l <username> -p <password> <target_ip> <service>`: Attack with a single username/password.
- `hydra -L <user_list> -P <password_list> <target_ip> <service>`: Attack with lists of usernames and passwords.
- `hydra -l <username> -P <password_list> -t 4 <target_ip> <service>`: Limit parallel tasks (e.g., to 4).
- `hydra -l <username> -P <password_list> -V <target_ip> <service>`: Show login/password for each attempt (verbose).

## Best Practices
- Start with a low number of tasks (`-t`) to avoid overwhelming the target or getting blocked.
- Use specific modules (`-m`) if necessary for complex authentication.
- Always obtain permission before attempting to crack logins.
