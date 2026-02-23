# NetExec (nxc)

NetExec is a network service exploitation tool that helps automate the assessment of large networks. It is a successor to CrackMapExec.

## Key Features
- **Multi-Protocol**: Supports SMB, WMI, WinRM, MSSQL, LDAP, SSH, VNC, RDP, and more.
- **Authentication**: Can use passwords, NTLM hashes (Pass-the-Hash), or Kerberos tickets (Pass-the-Ticket).
- **Execution**: Can execute commands, list shares, dump SAM/NTDS.dit, and more on target systems.
- **Enumeration**: Automatically enumerates users, groups, and privileges on target systems.

## Common Commands
- `nxc smb <target> -u <user> -p <password>`: Basic SMB authentication.
- `nxc smb <target> -u <user> -H <hash>`: Pass-the-Hash authentication.
- `nxc smb <target> --shares`: List shares on the target.
- `nxc smb <target> --users`: List users on the target.
- `nxc winrm <target> -u <user> -p <password> -x <command>`: Execute a command via WinRM.
- `nxc mssql <target> -u <user> -p <password> -q 'SELECT @@VERSION'`: Run a SQL query on an MSSQL server.

## Best Practices
- Use workspaces to organize your assessments.
- Be careful with destructive commands or actions that might lock out accounts.
- Regularly update the tool and its modules.
