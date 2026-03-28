@echo off
for %%i in (*.jpg) do (
cwebp -q 80 "%%i" -o "%%~ni.webp"
)
echo Done converting images!
pause