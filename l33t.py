from pwn import asm, shellcraft

shellcode = asm(shellcraft.i386.execve("/usr/local/bin/l33t"))
print(shellcode)
